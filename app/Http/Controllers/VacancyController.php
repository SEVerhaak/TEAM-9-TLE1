<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\UserVacancy;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use function Laravel\Prompts\error;

class VacancyController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancy::orderBy('updated_at', 'desc')->get();

        return view('open_vacancies', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $business = Business::where('id', $id)->first();
        return view('business/vacancies/create', compact('business'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required|min:10',
                'hours' => 'required|integer',
                'salary' => 'required|integer',
            ],
            [
                'hours.integer' => "Hours must be a number (can not be a decimal number)",
                'salary.integer' => "Salary must be a number (can not be a decimal number)"
            ]
        );

        $vacancy = new Vacancy();
        $vacancy->business_id = $request->business;
        $vacancy->name = $request->title;
        $vacancy->description = $request->description;
        $vacancy->salary = $request->salary;
        $vacancy->time_hours = $request->hours;
        $vacancy->image = "https://www.nbbuskillslab.nl/skillslab-training/opleiding-open-hiring/openhiring_5F420x280.jpg";
        $vacancy->save();

        return redirect()->route('business.vacancies', $request->business);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vacancy = Vacancy::findOrFail($id);

        //Check of de gebruiker al is ingeschreven voor desze specifieke vacature)
        $userApplyStatus = $this->checkUserAlreadyApplied($vacancy);

        return view('show', compact('vacancy', 'userApplyStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, string $vacancy)
    {
        $business = Business::where('id', $id)->first();
        $vacancy = Vacancy::find($vacancy);
        if ($business && $vacancy) {
            return view('business/vacancies/edit', compact('business', 'vacancy'));
        } else {
            return redirect()->route('business.vacancies', $id);
        }
    }

    /**
     * Update the specified resource in storage.
     * businesses*/
    public function update(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required|min:10',
                'hours' => 'required|integer',
                'salary' => 'required|integer',
            ],
            [
                'hours.integer' => "Hours must be a number (can not be a decimal number)",
                'salary.integer' => "Salary must be a number (can not be a decimal number)"
            ]
        );
        $vacancy = Vacancy::findOrFail($request->vacancy);

        $vacancy->name = $request->input('title');
        $vacancy->description = $request->input('description');
        $vacancy->salary = $request->input('salary');
        $vacancy->time_hours = $request->input('hours');
        $vacancy->save();


        return redirect()->route('business.vacancies', $request->business);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        //
    }

    public function dashboard()
    {
        $userId = Auth::id();

        $vacancies = UserVacancy::where('user_id', $userId)->orderBy('created_at', 'desc')->take(1)->get();
        return view('dashboard', compact('vacancies'));
    }

    public function registrationData()
    {
        $userId = Auth::id();

        $vacancyPending = UserVacancy::where('user_id', $userId)->where('application_stage', 0)->count();
        $vacancyAccepted = UserVacancy::where('user_id', $userId)->where('application_stage', 1)->count();
        $vacancyDenied = UserVacancy::where('user_id', $userId)->where('application_stage', 2)->count();;
        return view('registrations_data', compact('vacancyAccepted', 'vacancyPending', 'vacancyDenied'));
    }

    public function pendingRegistrations()
    {
        $userId = Auth::id();
        $application = 0;

        $vacancies = UserVacancy::where('user_id', $userId)->where('application_stage', 0)->orderBy('updated_at', 'desc')->get();
        foreach ($vacancies as $vacancy) {
            $vacancy->placement = $this->showPlaceInQueue($vacancy);;
        }
        return view('status', compact('vacancies', 'application'));
    }

    public function deniedRegistrations()
    {
        $userId = Auth::id();
        $application = 2;

        $vacancies = UserVacancy::where('user_id', $userId)->where('application_stage', 2)->orderBy('updated_at', 'desc')->get();
        return view('status', compact('vacancies', 'application'));
    }

    public function acceptedRegistrations()
    {
        $userId = Auth::id();
        $application = 1;
        $vacancies = UserVacancy::where('user_id', $userId)->where('application_stage', 1)->orderBy('updated_at', 'desc')->get();
        return view('status', compact('vacancies', 'application'));
    }

    public function showApplication($id)
    {
        $application = Uservacancy::findOrFail($id);
        return view('user-vacancy-overview.application-details', compact('application'));
    }

    public function showPlaceInQueue($vacancy)
    {
        $dateS = $vacancy->created_at;
        $queue = UserVacancy::where('vacancy_id', $vacancy->vacancy_id)->whereDate('created_at', '<', $vacancy->created_at)->count();
        return $queue;
    }

    public function checkUserAlreadyApplied(vacancy $vacancy)
    {
        $userAlreadyApplied = UserVacancy::where('vacancy_id', $vacancy->id)->where('user_id', Auth::id())->get();
        if (!empty($userAlreadyApplied->all())) {
            return $userApplyStatus = "Aanmelding annuleren";
        } else {
            return $userApplyStatus = "Aanmelden";
        }
    }


    public function vacancySucces($position)
    {
        return view('apply-succes', compact('position'));
    }

    public function vacancyApplicationHandler(vacancy $vacancy)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Je moet ingelogd zijn om je aan te melden voor vacatures');
        }


        $userApplyStatus = $this->checkUserAlreadyApplied($vacancy);
        $userAlreadyApplied = UserVacancy::where('vacancy_id', $vacancy->id)->where('user_id', Auth::id())->get();
        //Check of je op de 1e knop klikt die je krijgt op de details pagina
        //Als je nog op details pagina bent redirect je naar de confirm pagina
        if (isset($_POST['redirect'])) {
            if (empty($userAlreadyApplied->all())) {
                return view('confirm_application', compact('vacancy', 'userApplyStatus'));
            } else {
                $removeApplication = true;
                return view('confirm_application', compact('vacancy', 'userApplyStatus', 'removeApplication'));
            }

        } else {

            //Check of er door de gebruiker die nu is ingelogd al een keer aangemeld is voor de specifieke vacature
            if (Auth::check()) {
                if (empty($userAlreadyApplied->all())) {
                    //Maak nieuwe aanmelding als er geen aanmeldingen van deze gebruiker voor deze specifieke vacature is
                    $application = new userVacancy();
                    $application->user_id = Auth::id();
                    $application->vacancy_id = $vacancy->id;
                    $application->application_stage = 0;
                    $application->save();


                } else {
                    //Verwijder de applicatie als die al bestaat zodat je je kan uitschrijven
                    //DIT ZIT ALLEEN IN EEN FOR LOOP OM TE ZORGEN DAT HET OOK APPLICATIONS VERWIJDERD ALS
                    //ER OP EEN OF ANDERE MANIER INEENS DUPLICATES ZIJN IN DE DATABASE. (
                    //Gaat waarschijnlijk niet gebeuren, maar toch goed om te hebben)
                    foreach ($userAlreadyApplied as $singleApplication) {
                        $singleApplication->delete();
                    }
                    if (!request()->is('apply-succes')) {
                        return redirect()->route('open_vacancies.index', $vacancy->id)->with('message', 'Uw aanmelding voor:  ' . $vacancy->name . ' is succesvol verwijderd');
                    }
                }
            } else {
                return redirect()->route('open_vacancies.show', $vacancy->id)->with('message', 'You must be logged in to reply');
            }
            $vacancyName = $vacancy->name;

            return redirect()->route('open_vacancies.succes', ['position' => $vacancyName]);

        }
    }

    public function viewApplications(string $id, vacancy $vacancy)
    {

        $business = Business::where('id', $id)->first();
        $applications = UserVacancy::where('vacancy_id', $vacancy->id)->get();

        $waitListCounter = 0;
        foreach ($applications as $application) {
            if ($application->application_stage == 0) {
                $waitListCounter++;
                $application->application_stage_formatted = match ($application->application_stage) {
                    0 => "Wachtend",
                    1 => "Geaccepteerd",
                    2 => "Geweigerd",
                    default => "Onbekend", // Future-proofing
                };
                $application->wait_list = $waitListCounter;
            }
        }
        session(['waitListCounter' => $waitListCounter]);

        return view('business/vacancies/applications', compact('business', 'applications', 'vacancy', 'waitListCounter'));
    }

    public function acceptHandler(Request $request)
    {

        $request->validate(
            [
                'amountOfPeople' => 'required|integer|min:1|max:' . session('waitListCounter'),
            ],
            [
                'amountOfPeople.min' => 'U moet minimaal 1 sollicitant aannemen',
                'amountOfPeople.max' => 'U kunt op dit moment niet meer dan ' . session('waitListCounter') . ' sollicitanten accepteren.',
            ]
        );

        $applications = UserVacancy::where('vacancy_id', $request->vacancy)->where('application_stage', 0)->take($request->amountOfPeople)->get();

        foreach ($applications as $application) {
            $application->application_stage = 1;
            $application->save();
        }
        session(['waitListCounter' => 0]);
        return route('vacancy.applications', ['business' => $request->business, 'vacancy' => $request->vacancy]);
    }
}

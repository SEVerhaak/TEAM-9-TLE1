<?php

namespace App\Http\Controllers;

use App\Models\UserVacancy;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function create()
    {
        dd("create page");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        //
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

        $vacancies = UserVacancy::where('user_id', $userId)->orderBy('created_at', 'desc')->get();
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

    public function showStatus($id){
        $userId = Auth::id();
        $vacancy = UserVacancy::where('user_id', $userId)->where('id', $id);
        if($vacancy->application_stage == 0){
            $this->pendingRegistrations();
        } elseif ($vacancy->application_stage == 1){
            $this->acceptedRegistrations();
        } elseif ($vacancy->application_stage == 2){
            $this->deniedRegistrations();
        }
    }

    public function pendingRegistrations(){
        $userId = Auth::id();

        $vacancies = UserVacancy::where('user_id', $userId)->where('application_stage', 0)->orderBy('updated_at', 'desc')->get();
        return view('status', compact('vacancies'));
    }
    public function deniedRegistrations(){
        $userId = Auth::id();

        $vacancies = UserVacancy::where('user_id', $userId)->where('application_stage', 2)->orderBy('updated_at', 'desc')->get();
        return view('status', compact('vacancies'));
    }
    public function acceptedRegistrations(){
        $userId = Auth::id();

        $vacancies = UserVacancy::where('user_id', $userId)->where('application_stage', 1)->orderBy('updated_at', 'desc')->get();
        return view('status', compact('vacancies'));
    }

    public function showApplication($id){
        $application = Uservacancy::findOrFail($id);
//        return view('application', compact('application'));
        return view('application', compact('application'));
    }

    public function checkUserAlreadyApplied(vacancy $vacancy)
    {
        $userAlreadyApplied = UserVacancy::all()->where('vacancy_id', $vacancy->id)->where('user_id', Auth::id());
        if (!empty($userAlreadyApplied->all())) {
            return $userApplyStatus = "Aanmelding annuleren";
        } else {
            return $userApplyStatus = "Aanmelden";
        }
    }


    public function vacancyApplicationHandler(vacancy $vacancy)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Je moet ingelogd zijn om je aan te melden voor vacatures');
        }

        $userApplyStatus = $this->checkUserAlreadyApplied($vacancy);
        $userAlreadyApplied = UserVacancy::all()->where('vacancy_id', $vacancy->id)->where('user_id', Auth::id());
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
//            $userAlreadyApplied = UserVacancy::all()->where('vacancy_id', $vacancy->id)->where('user_id', Auth::id());
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
                return redirect()->route('open_vacancies.index', $vacancy->id)->with('message', 'Uw aanmelding voor:  ' . $vacancy->name. ' is succesvol verwijderd');

            }
        } else {
            return redirect()->route('open_vacancies.show', $vacancy->id)->with('message', 'You must be logged in to reply');
        }
        return redirect()->route('open_vacancies.index', $vacancy->id)->with('message', 'Uw aanmelding voor: ' . $vacancy->name.' is succesvol ingediend!');
    }
    }
}

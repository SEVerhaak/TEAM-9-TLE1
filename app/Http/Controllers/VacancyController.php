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
        //
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
        $userAlreadyApplied = UserVacancy::all()->where('vacancy_id', $vacancy->id)->where('user_id', Auth::id());
        if (!empty($userAlreadyApplied->all())) {
            $userApplyStatus = "Withdraw Application";
        } else {
            $userApplyStatus = "Apply";
        }

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


    public function vacancyApplicationHandler(vacancy $vacancy)
    {
        //Check of er door de gebruiker die nu is ingelogd al een keer aangemeld is voor de specifieke vacature
        if (Auth::check()) {
            $userAlreadyApplied = UserVacancy::all()->where('vacancy_id', $vacancy->id)->where('user_id', Auth::id());
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
                return redirect()->route('open_vacancies.index', $vacancy->id)->with('message', 'You have succesfully withdrawn your application for ' . $vacancy->name.'.');

            }
        } else {
            return redirect()->route('open_vacancies.show', $vacancy->id)->with('message', 'You must be logged in to reply');
        }
        return redirect()->route('open_vacancies.index', $vacancy->id)->with('message', 'You have succesfully submitted an application for ' . $vacancy->name.'!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Models\UserVacancy;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForYouPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->id();

        // Get all vacancy IDs the user has applied for
        $vacancyIds = UserVacancy::where('user_id', $userId)->pluck('vacancy_id')->toArray();

        // Retrieve accepted and denied vacancies from the session
        $acceptedVacancies = session()->get('acceptedVacancies', []);
        $deniedVacancies = session()->get('deniedVacancies', []);

        // Merge all vacancy IDs to exclude: applied, accepted, and denied
        $allExcludedIds = array_merge($vacancyIds, $acceptedVacancies, $deniedVacancies);

        // Attempt to find a random vacancy that the user has not applied for, accepted, or denied
        $vacancy = Vacancy::whereNotIn('id', $allExcludedIds)->inRandomOrder()->first();

        // If no valid vacancy is found, show the out-of-vacancies view
        if (!$vacancy) {
            return view('for-you-page.out-of-vacancies');
        }

        return view('for-you-page.index', ['vacancies' => [$vacancy]]);
    }

    public function acceptVacancy(Request $request)
    {
        $vacancies = json_decode($request->input('vacancies'), true); // Decode the vacancies JSON

        // Retrieve accepted and denied vacancies from session
        $acceptedVacancies = session()->get('acceptedVacancies', []);
        $deniedVacancies = session()->get('deniedVacancies', []);

        $this->userApply($vacancies[0]['id']); // Mark vacancy as applied
        $acceptedVacancies[] = $vacancies[0]['id']; // Add to accepted list
        session()->put('acceptedVacancies', $acceptedVacancies); // Update session with new accepted vacancies

        return $this->acceptedVacancyShowNewVacancy($vacancies, $acceptedVacancies, $deniedVacancies);
    }

    public function denyVacancy(Request $request)
    {
        $vacancies = json_decode($request->input('vacancies'), true); // Decode the vacancies JSON

        // Retrieve accepted and denied vacancies from session
        $acceptedVacancies = session()->get('acceptedVacancies', []);
        $deniedVacancies = session()->get('deniedVacancies', []);
        // Handle the deny action with $vacancies
        $deniedVacancies[] = $vacancies[0]['id']; // Add to denied list
        session()->put('deniedVacancies', $deniedVacancies); // Update session with new denied vacancies

        return $this->rejectedVacancyShowNewVacancy($vacancies, $acceptedVacancies, $deniedVacancies);
    }

    public function rejectedVacancyShowNewVacancy($vacancyOld, $acceptedVacancies, $deniedVacancies)
    {
        $userId = auth()->id(); // Get the authenticated user's ID
        $vacancyOldId = $vacancyOld[0]['id']; // The ID of the current vacancy

        // Get all vacancy IDs the user has applied for
        $appliedVacancyIds = UserVacancy::where('user_id', $userId)->pluck('vacancy_id')->toArray();

        // Exclude the current, accepted, and denied vacancies
        $allExcludedIds = array_merge($appliedVacancyIds, $acceptedVacancies, $deniedVacancies);

        // Fetch a random vacancy excluding the current one and applied vacancies
        $vacancies = Vacancy::whereNotIn('id', $allExcludedIds)
            ->inRandomOrder()
            ->limit(1)
            ->get();

        if ($vacancies->isEmpty()) {
            // Return an error response if no new vacancies are available
            return redirect()->route('fyp.out-of-vacancies');
            //return response()->view('for-you-page.out-of-vacancies');
        }

        return redirect()->route('fyp.index', compact('vacancies'));

        //return view('for-you-page.index', compact('vacancies'));
    }

    public function empty()
    {
        return view('for-you-page.out-of-vacancies');
    }

    public function acceptedVacancyShowNewVacancy($vacancyOld, $acceptedVacancies, $deniedVacancies)
    {
        $userId = auth()->id(); // Get the authenticated user's ID
        $vacancyOldId = $vacancyOld[0]['id']; // The ID of the current vacancy

        $this->userApply($vacancyOldId);

        // Get all vacancy IDs the user has applied for
        $appliedVacancyIds = UserVacancy::where('user_id', $userId)->pluck('vacancy_id')->toArray();

        // Exclude the current, accepted, and denied vacancies
        $allExcludedIds = array_merge($appliedVacancyIds, $acceptedVacancies, $deniedVacancies);

        // Fetch a random vacancy excluding the current one and applied vacancies
        $vacancies = Vacancy::whereNotIn('id', $allExcludedIds)
            ->inRandomOrder()
            ->limit(1)
            ->get();

        if ($vacancies->isEmpty()) {
            // Return an error response if no new vacancies are available
            return response()->view('for-you-page.out-of-vacancies');
        }

        return redirect()->route('fyp.index', compact('vacancies'));

        //return view('for-you-page.index', compact('vacancies'));
    }

    public function resetStorage()
    {
        session()->forget('acceptedVacancies');
        session()->forget('deniedVacancies');

        return redirect()->route('fyp.index');
    }


    public function userApply($vacancyId)
    {
        $userId = Auth::id();

        // Check if the user has already applied to the given vacancy
        $existingApplication = userVacancy::where('user_id', $userId)
            ->where('vacancy_id', $vacancyId)
            ->first();

        if ($existingApplication) {
            // If an application already exists, you can return or handle the case accordingly
            return response()->json(['message' => 'You have already applied for this vacancy.'], 400);
        }

        // If no application exists, create a new one
        $application = new userVacancy();
        $application->user_id = $userId;
        $application->vacancy_id = $vacancyId;
        $application->application_stage = 0;
        $application->save();

        //return response()->json(['message' => 'Application successful.'], 200);
    }

    public function confirm()
    {
        return view('for-you-page.confirm');
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
    public function show(Vacancy $vacancy)
    {
        //
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
}

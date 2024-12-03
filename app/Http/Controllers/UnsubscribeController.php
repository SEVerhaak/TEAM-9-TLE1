<?php

namespace App\Http\Controllers;

use App\Models\UserVacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnsubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('unsubscribe');

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $vacancy)
    {
        // Deletes the Vacancy where WERKZOEKENDE was in DETAILS of
        // ELOQUENT finds userID + vacancyID then deletes the connection.

//        @dd($vacancy);


        // User id defenition
        $userId = Auth::id();

        //Eloquent query + delete
        $userVacancy = UserVacancy::where('user_id', $userId)
            ->where('vacancy_id', $vacancy)
            ->delete();


        // FOR TEST PLEASE REMOVE $userID and Make it 20 or 25 (see database table)
        // ALSO IN unsubscribe.blade.php change $vacancy to 21 if $userID is 20 and // 25 if $userID is 25

    }

}

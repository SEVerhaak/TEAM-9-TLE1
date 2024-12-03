<?php

namespace App\Http\Controllers;

use App\Models\UserVacancy;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    {
        //
    }
}

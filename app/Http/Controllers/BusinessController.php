<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\UserBusiness;
use App\Models\UserVacancy;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id = null)
    {
        //Simpele error als er geen ID word ingevuld, kunnen we later nog een lijst van alle
        //bedrijven voor maken als we willen.
        if (empty($id)) {
            abort(403);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
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
        $business = Business::all()->where('id', $id)->first();
        if ($business == null) {
            abort(403);
        } else {
            $vacancyCount = Vacancy::all()->where('business_id', $id)->count();
            return view('business/business', compact('business', 'vacancyCount'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        dd("bla");
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
    public function destroy(string $id)
    {
        //
    }

    public function dashboard(string $id)
    {
        //Deze functie gaat door mijn custom middleware dus is beveiligd

        $vacancies = Vacancy::all()->where('business_id', $id)->reverse()->take(2);
        $business = Business::all()->where('id', $id)->first();
        return view('business/dashboard', compact('business', 'vacancies'));

    }

    public function vacancies(string $id)
    {
        $vacancies = Vacancy::where('business_id', $id)->orderBy('created_at')->get();
        $business = Business::all()->where('id', $id)->first();
        return view('business/vacancies/vacancies_list', compact('business', 'vacancies'));
    }
}

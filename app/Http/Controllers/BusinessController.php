<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\UserBusiness;
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
        if (empty($id)) {
            dd('bla');
        } else {
            $business = Business::all()->where('id', $id)->first();
            $vacancyCount = Vacancy::all()->where('business_id', $id)->count();
            return view('business/business', compact('business', 'vacancyCount'));
        }
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
    public function destroy(string $id)
    {
        //
    }

    public function dashboard(string $id)
    {
        $vacancies = Vacancy::all()->where('business_id', $id);
        $isAdmin = UserBusiness::all()
            ->where('business_id', $id)
            ->where('user_id', Auth::id())
            ->where('function', 'ceo' || 'admin')
            ->count();

        if (!empty($isAdmin)) {
            $business = Business::all()->where('id', $id)->first();
            return view('business/dashboard', compact('business', 'vacancies'));
        } else {
            abort(403);
        }
    }
}

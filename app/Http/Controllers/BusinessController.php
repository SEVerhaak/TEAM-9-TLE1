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
    public function index()
    {
        $businesses = UserBusiness::where('user_id', Auth::id())->get();
        return view('business/my-businesses', compact('businesses'));
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
        $business = Business::all()->where('id', $id)->first();
        return view('business/edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'hq_location' => 'required',
            'logo' => 'mimes:jpeg,jpg,png',
            'dashboard' => 'mimes:jpeg,jpg,png',

        ]);
        $business = Business::all()->where('id', $id)->first();
        $business->name = $request->input('name');
        $business->description = $request->input('description');
        $business->hq_location = $request->input('hq_location');
        $business->email = $request->input('email') ?? "No Email";
        $business->phone_number = $request->input('phone_number') ?? "No Phone Number";

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->storePublicly('uploads/business/logo', 'public');
            $business->logo = $logo; //to store the link to the image in the DB
        }
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->storePublicly('uploads/business/banner', 'public');
            $business->banner_image = $banner; //to store the link to the image in the DB
        }

        $business->save();

        return redirect()->route('business.edit', $business->id);
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
        $vacancies = Vacancy::where('business_id', $id)->orderBy('created_at', 'desc')->get();
        $business = Business::all()->where('id', $id)->first();
        return view('business/vacancies/vacancies_list', compact('business', 'vacancies'));
    }
}

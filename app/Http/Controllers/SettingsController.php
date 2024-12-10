<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('settings/settings');
    }

    public function preferences()
    {
        return view('settings/preferences');
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
    public function destroy(string $id)
    {
        //
    }


    public function account()
    {

        //define user
//        $user = auth()->user();
        // verify user id to user id in database
        $user = User::Where('id', auth()->id())->first();
        //Get users's name from database
        $name = $user->name;

        // split name

        $fullname = explode(' ', $name);
        //return first and last name
        $firstname = $fullname[0];
        $lastname = $fullname[1];

        //get email
        $email = $user->email;








        return view('settings.account', [
            'user' => $user,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,


        ]);

    }

    public function storesettings(Request $request)
    {
        //get table
        $user = User::Where('id', auth()->id())->first();


        //CHECK IF PASSWORD IS CORRECT
        if ($request->password === null) {
            @dd($request->all(), 'Password is null');
            return redirect()->back()->with('error', 'Please enter your password to update your account');
        } elseif ($request->password === $user->password) {
            ;




        // IF ERROR OCCURS DD($REQUEST->ALL()) TO SEE THE ERROR SKRRRT
//        @dd($request->all());

        //Merge First and Last Name
        //get first and last name
        $firstname = $request->Firstname;
        $lastname = $request->Lastname;

//        @dd($firstname);

        //add to eachoterh
        $name = $firstname . ' ' . $lastname;





        //get user


        //update user
        $user->name = $name;
        $user->email = $request->email;
        $user->save();

        //redirect to account page
        return redirect()->route('settings.account');

        } else {
//            @dd($request->all(), 'Password is incorrect');
            return redirect()->back()->with('incorrect', 'Password is incorrect, try again');

        }
    }
}

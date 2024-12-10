<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\User;
use App\Models\UserCertificate;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('settings/settings');
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
//            @dd($request->all(), 'Password is null');
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


    public function preferences()
    {
        // set variables so get checkmarks
        $certificates = Certificate::All();
        $userCertificates = UserCertificate::All()->where('user_id', auth()->id());
        $user = User::Where('id', auth()->id())->first();
//        $certificates = Certificate::WhereHas('user_id', $user->id)->get();
//        $certificates = $user->certificates;
//        @dd($certificates);


        return view('settings.preferences', compact('certificates', 'userCertificates', 'user'));
    }

    public function storepreferences(Request $request)
    {
        // set variabelen
        $auto = $request->rijbewijs_auto;
        $vrachtwagen = $request->rijbewijs_vrachtwagen;
        $vorkheftruck = $request->rijbewijs_vorkheftruck;
        $diploma = $request->Middelbare_school_diploma;

        //define user id


        if ($diploma === null) {
            $user_id = auth()->id();
            UserCertificate::Where('user_id', $user_id)
                ->where('certificate_id', 4)
                ->delete();
        } elseif ($diploma === 'on') {
            $userCertificate = new UserCertificate();
            $userCertificate->user_id = auth()->id();
            $userCertificate->certificate_id = 4;
            $userCertificate->save();
        }

        if ($auto === null) {
            $user_id = auth()->id();
            UserCertificate::Where('user_id', $user_id)
                ->where('certificate_id', 1)
                ->delete();
        } elseif ($auto === 'on') {
            $userCertificate = new UserCertificate();
            $userCertificate->user_id = auth()->id();
            $userCertificate->certificate_id = 1;
            $userCertificate->save();
        }

        if ($vrachtwagen === null) {
            $user_id = auth()->id();
            UserCertificate::Where('user_id', $user_id)
                ->where('certificate_id', 2)
                ->delete();
        } elseif ($vrachtwagen === 'on') {
            $userCertificate = new UserCertificate();
            $userCertificate->user_id = auth()->id();
            $userCertificate->certificate_id = 2;
            $userCertificate->save();
        }


        //check if checkbox is checked
        //delete if checked of maak aan in database
        if ($vorkheftruck === null) {
            $user_id = auth()->id();
            UserCertificate::Where('user_id', $user_id)
                ->where('certificate_id', 3)
                ->delete();
        } elseif ($vorkheftruck === 'on') {
            $userCertificate = new UserCertificate();
            $userCertificate->user_id = auth()->id();
            $userCertificate->certificate_id = 3;
            $userCertificate->save();
        }


        return redirect()->route('settings.preferences');
    }


    public function password()
    {
        return view('settings.password');
    }

    public function storepassword(Request $request)
    {
        $user = User::Where('id', auth()->id())->first();
        $pkey = $user->password;
// password van ingelogde user wordt opgehaald
//        @DD($pkey);


        $insertedpkey = $request->old_password;
        $newpkey = $request->new_password;
        $confirmednewpk = $request->confirmed_new_password;

        if ( Hash::check($insertedpkey, $pkey) && $newpkey === $confirmednewpk) {
            // save $newpkey to database
            $user->password = Hash::make($newpkey);

            $user->save();

            return redirect()->back()->with('success', 'Wachtwoord verandert!');
        } else {
            return redirect()->back()->with('error', 'Wachtwoord wijzigen mislukt, probeer het opnieuw!');
        }

    }
}


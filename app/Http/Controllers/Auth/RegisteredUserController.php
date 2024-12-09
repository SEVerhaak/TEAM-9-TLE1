<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public bool $stepOneCompleted = false;
    public bool $stepTwoCompleted = false;
    public bool $stepThreeCompleted = false;


    public function step1(Request $request)
    {
        return view('login.login-step-1');
    }

    public function storeStep1(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Vul een E-Mail adres in.',
            'email.email' => 'Voer een geldig E-Mail adres in.',
            'email.unique' => 'Dit E-Mail adres is al geregistreerd.',
            'password.required' => 'Vul een wachtwoord in.',
            'password.min' => 'Wachtwoord moet minimaal uit 8 karakters bestaan.',
        ]);

        // Store Step 1 data in session
        $request->session()->put('email', $validatedData['email']);
        $request->session()->put('password', $validatedData['password']);

        $request->session()->put('stepOneCompleted', true);

        // Redirect to Step 2
        return redirect()->route('register.step2');
    }


    public function step2(Request $request): View
    {
        if (!$request->session()->get('stepOneCompleted', false)) {
            return view('login.login-step-1');
        } else{
            return view('login.login-step-2');
        }

    }

    public function storeStep2(Request $request)
    {
        // Validate the data
        $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'date', 'before:' . now()->subYears(16)->toDateString()],
        ], [
            'first_name.required' => 'Voornaam is verplicht.',
            'first_name.string' => 'Voornaam moet een geldige tekst zijn.',
            'first_name.max' => 'Voornaam mag niet langer zijn dan 255 tekens.',
            'last_name.required' => 'Achternaam is verplicht.',
            'last_name.string' => 'Achternaam moet een geldige tekst zijn.',
            'last_name.max' => 'Achternaam mag niet langer zijn dan 255 tekens.',
            'birth_date.required' => 'Geboortedatum is verplicht.',
            'birth_date.date' => 'Geboortedatum moet een geldige datum zijn.',
            'birth_date.before' => 'Je moet 16 jaar of ouder zijn.',
        ]);

        // Store the validated data in the session
        $request->session()->put('first_name', $validatedData['first_name']);
        $request->session()->put('last_name', $validatedData['last_name']);
        $request->session()->put('birth_date', $validatedData['birth_date']);

        $request->session()->put('stepTwoCompleted', true);

        // Redirect to Step 3
        return redirect()->route('register.step3');
    }

    /**
     * Display the view for Step 2 of registration.
     */


    /**
     * Display the view for Step 3 of registration.
     */
    public function step3(Request $request): View
    {
        if (!$request->session()->get('stepTwoCompleted', false)) {
            if (!$request->session()->get('stepOneCompleted', false)){
                return view('login.login-step-1');
            } else{
                return view('login.login-step-2');
            }
        } else{
            return view('login.login-step-3');
        }
    }

    public function storeStep3(Request $request)
    {
        // Store Step 3 data in the session
        $request->session()->put('diploma', $request->has('diploma'));
        $request->session()->put('car_license', $request->has('car_license'));
        $request->session()->put('truck_license', $request->has('truck_license'));
        $request->session()->put('forklift_license', $request->has('forklift_license'));
        $request->session()->put('hours', $request->hours);

        // Prepare the user's full name
        $name = $request->session()->get('first_name') . ' ' . $request->session()->get('last_name');

//        @dd($request->session()->all(), $request->session()->get('password'));


        // Create the user
        $user = User::create([
            'name' => $name,
            'email' => $request->session()->get('email'),
            'email_verified_at' => now(),
            'password' => Hash::make($request->session()->get('password')),
        ]);

        // Get the certificates based on the user's selections (e.g., diploma, car_license, etc.)
        $certificates = [];


        if ($request->session()->get('car_license')) {
            $certificates[] = 1;  // Assuming 1 is the ID for car license
        }
        if ($request->session()->get('truck_license')) {
            $certificates[] = 2;  // Assuming 2 is the ID for truck license
        }
        if ($request->session()->get('forklift_license')) {
            $certificates[] = 3;  // Assuming 3 is the ID for forklift license
        }
        if ($request->session()->get('diploma')) {
            $certificates[] = 4;  // Assuming 4 is the ID for the diploma in the certificates table
        }

        // Attach certificates to the user through the user_certificates pivot table
        $user->certificates()->attach($certificates);

//        // Set the 'hours' on the user (you could also add this to a 'profile' table if you have one)
//        $user->hours = $request->session()->get('hours');
//        $user->save();

        // Clear the session after user creation
        $request->session()->flush();

        // Log the user in
        Auth::login($user);

        $request->session()->put('stepOneCompleted', false);
        $request->session()->put('stepTwoCompleted', false);
        $request->session()->put('stepThreeCompleted', false);

        // Redirect to a dashboard or other appropriate route
        return redirect()->route('register.success');
    }

    public function store(Request $request)
    {

//        dd('store method reached');
        // Validate all data at once
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'diploma' => 'nullable|boolean',
            'car_license' => 'nullable|boolean',
            'truck_license' => 'nullable|boolean',
            'forklift_license' => 'nullable|boolean',
            'hours' => 'required|integer|min:0|max:40',
        ]);

        // Retrieve the session data from all steps
//        $user = User::create([
//            'email' => $request->session()->get('email'),
//            'password' => Hash::make($request->session()->get('password')),
//            'first_name' => $request->session()->get('first_name'),
//            'last_name' => $request->session()->get('last_name'),
//            'phone_number' => $request->session()->get('phone_number'),
//        ]);

        // Optionally store additional info (if provided)
//        $user->profile()->create([
//            'diploma' => $request->session()->get('diploma', false),
//            'car_license' => $request->session()->get('car_license', false),
//            'truck_license' => $request->session()->get('truck_license', false),
//            'forklift_license' => $request->session()->get('forklift_license', false),
//            'hours' => $request->session()->get('hours'),
//        ]);

        // Log the user in
        Auth::login($user);

        // Clear the session data after user creation
        $request->session()->flush();

        // Redirect to a dashboard or other appropriate route
        return redirect()->route('home');
    }
}

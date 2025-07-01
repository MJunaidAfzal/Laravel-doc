<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $data['title'] = 'Login';
        return view('web.auth.login', $data);
    }

    public function patientRegister()
    {
        $data['title'] = 'Patient Register';
        return view('web.auth.patient-register', $data);
    }


    public function patientStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required',
        ]);

        $patient = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
        ]);

          if ($patient) {
            Auth::login($patient);
                return redirect()->route('web.index')->with('success', $patient->name . ' registered successfully.');

        } else {
            return redirect()->back();
                return redirect()->back()->with('error', 'Registration failed! Please try again.');

        }
    }


       public function doctorRegister()
    {
        $data['title'] = 'Doctor Register';
        return view('web.auth.doctor-register', $data);
    }

        public function doctorStore(Request $request)
    {
      $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required',
        ]);

        $doctor = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
        ]);

        if ($doctor) {
            Auth::login($doctor);
                return redirect()->route('web.index')->with('success', $doctor->name . ' registered successfully.');

        } else {
            return redirect()->back();
                return redirect()->back()->with('error', 'Registration failed! Please try again.');

        }
    }

            public function authLogin(Request $request)
        {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('web.index')->with('success', 'Authentication Success! You are logged in.');
            }

                return redirect()->back()->with('error', 'Authentication failed! Please try again.');
        }
}

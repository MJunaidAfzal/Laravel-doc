<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

       public function doctorRegister()
    {
        $data['title'] = 'Doctor Register';
        return view('web.auth.doctor-register', $data);
    }
}

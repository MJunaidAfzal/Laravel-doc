<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['title'] = 'Doctor Dashboard';
        return view('web.doctor.dashboard', $data);
    }

    public function requests()
    {
        $data['title'] = 'Requests';
        return view('web.doctor.request', $data);
    }

    public function appointments()
    {
        $data['title'] = 'Appointments';
        return view('web.doctor.appointments', $data);
    }

    public function appointmentsDetail()
    {
        $data['title'] = 'Appointment Details';
        return view('web.doctor.appointment-detail', $data);
    }

    public function appointmentStart()
    {
        $data['title'] = 'Appointment Start';
        return view('web.doctor.appointment-start', $data);
    }
}

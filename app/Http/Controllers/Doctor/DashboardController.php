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

    public function myPatient()
    {
        $data['title'] = 'My Patient';
        return view('web.doctor.my-patient', $data);
    }

    public function patientProfile()
    {
        $data['title'] = 'Patient Profile';
        return view('web.doctor.patient-profile', $data);
    }

    public function services()
    {
        $data['title'] = 'Spaciality & Services';
        return view('web.doctor.service', $data);
    }

    public function reviews()
    {
        $data['title'] = 'Reviews';
        return view('web.doctor.reviews', $data);
    }

     public function account()
    {
        $data['title'] = 'Accounts';
        return view('web.doctor.account', $data);
    }

    public function invoice()
    {
        $data['title'] = 'Invoices';
        return view('web.doctor.invoice', $data);
    }

    public function payout()
    {
        $data['title'] = 'Payout Settings';
        return view('web.doctor.payout', $data);
    }

    public function socialMedia()
    {
        $data['title'] = 'Socail Media';
        return view('web.doctor.social-media', $data);
    }
}

<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileSettingController extends Controller
{
    public function profileSetting()
    {
        $data['title'] = 'Doctor Profile Setting';
        return view('web.doctor.profile-setting', $data);
    }

    public function experience()
    {
        $data['title'] = 'Doctor Experience';
        return view('web.doctor.experience', $data);
    }

    public function education()
    {
        $data['title'] = 'Doctor Education';
        return view('web.doctor.education', $data);
    }

    public function award()
    {
        $data['title'] = 'Doctor Award';
        return view('web.doctor.award', $data);
    }

        public function insurance()
    {
        $data['title'] = 'Doctor Insurance';
        return view('web.doctor.insurance', $data);
    }

            public function clinic()
    {
        $data['title'] = 'Doctor Clinic';
        return view('web.doctor.clinic', $data);
    }

                public function hours()
    {
        $data['title'] = 'Doctor Business Hours';
        return view('web.doctor.hours', $data);
    }
}

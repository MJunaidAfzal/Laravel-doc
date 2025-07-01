<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data['title'] = 'Home Page';
        return view('web.index',$data);
    }

        public function aboutUs(){
        $data['title'] = 'About Us';
        return view('web.pages.about-us',$data);
    }

      public function contactUs(){
        $data['title'] = 'Contact Us';
        return view('web.pages.contact-us',$data);
    }

     public function pricing(){
        $data['title'] = 'Pricing Plan';
        return view('web.pages.pricing',$data);
    }

       public function faq(){
        $data['title'] = 'FAQ';
        return view('web.pages.faq',$data);
    }

        public function termsAndConditions(){
        $data['title'] = 'Terms And Conditions';
        return view('web.pages.terms-and-conditions',$data);
    }

           public function privacyPolicy(){
        $data['title'] = 'Privacy Policy';
        return view('web.pages.privacy-policy',$data);
    }


}

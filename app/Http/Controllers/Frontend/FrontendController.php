<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\Mission;
use App\Model\Vision;
use App\Model\NewsEvent;
use App\Model\Service;
use App\Model\About;

class FrontendController extends Controller
{
    public function index(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
        $data['mission'] = Mission::first();
        $data['vision'] = Vision::first();
        $data['news_events'] = NewsEvent::orderBy('id', 'desc')->get();
        $data['services'] = Service::all();

        return view('frontend.layouts.home', $data);
    }

    public function aboutUS(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        
        return view('frontend.single_pages.about-us', $data);
    }

    public function contactUs(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();

        return view('frontend.single_pages.contact-us', $data);
    }

    public function newsDetails($id){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        
        $data['news'] = NewsEvent::find($id);

        return view('frontend.single_pages.news-event-details', $data);
    }

    public function mission(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['mission'] = Mission::first();

        return view('frontend.single_pages.mission', $data);
    }

    public function vision(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['vision'] = Vision::first();

        return view('frontend.single_pages.vision', $data);
    }

    public function newsEvents(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['news_events'] = NewsEvent::orderBy('id', 'desc')->get();

        return view('frontend.single_pages.news-events', $data);
    }
}

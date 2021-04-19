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

class FrontendController extends Controller
{
    public function index(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['contact'] = Contact::first();
        $data['mission'] = Mission::first();
        $data['vision'] = Vision::first();
        $data['news_events'] = NewsEvent::orderBy('id', 'desc')->get();

        return view('frontend.layouts.home', $data);
    }

    public function aboutUS(){
        
        return view('frontend.single_pages.about-us');
    }

    public function contactUs(){

        return view('frontend.single_pages.contact-us');
    }

    public function newsDetails($id){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        
        $data['news'] = NewsEvent::find($id);

        return view('frontend.single_pages.news-event-details', $data);
    }
}

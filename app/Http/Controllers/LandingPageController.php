<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\ContactRequest;
use App\Models\MailingList;
use App\Models\Member;
use App\Models\Microservice;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Team;
use App\Models\Why;
use Backpack\LangFileManager\app\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LandingPageController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome',[
            "Slides"=>Slide::get(),
            "About"=>About::first(),
            "Contact"=>Contact::first(),
            "Service"=>Service::first(),
            "Microservices"=>Microservice::get(),
            "Why"=>Why::first(),
            "Team"=>Team::first(),
            "Members"=>Member::get(),
        ]);
    }

    public function store(Request $request)
    {
        ContactRequest::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "microservice_id"=>$request->microservice_id,
            "message"=>$request->message,
        ]);
        Session::flash("Success",__('content.success_message'));
        return redirect('/#contact');
    }

    public function store2(Request $request)
    {
        MailingList::create([
            "email"=>$request->email,
        ]);
        Session::flash("Success2",__('content.mailing_list_success_message'));
        return redirect('/#footer');
    }

    public function setLanguage(Request $request, $locale)
    {
        if (in_array($locale, Language::where('active',1)->pluck('abbr')->toArray())) {
            Session::put('locale', $locale);
        }
        return redirect()->back();
    }
}

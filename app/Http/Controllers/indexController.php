<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

//Model
use App\Models\Hero;
use App\Models\Contact;
use App\Models\Contactposts;
use App\Models\Pages;
use App\Models\Abouts;
use App\Models\Pricing;
use App\Models\Services;
use App\Models\Portfolios;



class indexController extends Controller
{
    public function index()
    {
        $pages = Pages::all()->first();
        $heroes = Hero::all()->first();
        $about = Abouts::all()->first();
        $services = Services::all();
        $serv = Services::all()->first();
        $portfolios = Portfolios::all()->first();
        $pricing = Pricing::all()->first();
        $pricings = Pricing::all();
        $contact = Contact::all()->first();

        return view('front.index',
            ['pages' => $pages,
                'heroes' => $heroes,
                'about' => $about,
                'services' => $services,
                'serv' => $serv,
                'portfolios' => $portfolios,
                'pricing' => $pricing,
                'pricings' => $pricings,
                'contact' => $contact,]);
    }

    public function contactPost(ContactRequest $request)
    {
        Contactposts::create([
            'name' => $request->name,
            'mail' => $request->mail,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return redirect()->back();
    }
}

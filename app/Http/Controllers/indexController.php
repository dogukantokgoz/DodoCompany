<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

//Model
use App\Models\Heroes;
use App\Models\Contacts;
use App\Models\Contactposts;
use App\Models\Pages;
use App\Models\Abouts;
use App\Models\Pricings;
use App\Models\Services;
use App\Models\Portfolios;
use App\Models\Faqs;


class indexController extends Controller
{
    public function index()
    {
        $pages = Pages::all()->first();
        $heroes = Heroes::all()->first();
        $about = Abouts::all()->first();
        $services = Services::all();
        $serv = Services::all()->first();
        $portfolios = Portfolios::all()->first();
        $pricing = Pricings::all()->first();
        $pricings = Pricings::all();
        $faqs = Faqs::all()->first();
        $contact = Contacts::all()->first();

        return view('front.index',
            ['pages' => $pages,
                'heroes' => $heroes,
                'about' => $about,
                'services' => $services,
                'serv' => $serv,
                'portfolios' => $portfolios,
                'pricing' => $pricing,
                'pricings' => $pricings,
                'faqs' => $faqs,
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

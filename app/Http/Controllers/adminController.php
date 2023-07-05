<?php

namespace App\Http\Controllers;

//Request
use App\Http\Requests\AboutRequest;
use App\Http\Requests\FaqRequest;
use App\Http\Requests\HeroRequest;
use App\Http\Requests\PortfolioRequest;
use App\Http\Requests\PricingRequest;
use App\Http\Requests\ServicesRequest;
use Illuminate\Http\Request;

//Model
use App\Models\Heroes;
use App\Models\Abouts;
use App\Models\Services;
use App\Models\Pricings;
use App\Models\Portfolios;
use App\Models\Contactposts;
use App\Models\Faqs;
use App\Models\Contacts;



class adminController extends Controller
{
    public function index()
    {
        return view('back.index');
    }

    public function hero()
    {
        $heroes = Heroes::all()->first();
        return view('back.pages.hero', ['heroes' => $heroes]);
    }

    public function heroUpdate(HeroRequest $request)
    {
        $heroes = Heroes::find($request->hero_id);
        $heroes->update([
            'title' => $request->title,
            'content' => $request->description,
            'video' => $request->link,
        ]);

        return redirect()->back()->with('success', 'Başlık başarıyla güncellendi');
    }

    public function about()
    {
        $abouts = Abouts::all()->first();

        return view('back.pages.about', ['abouts' => $abouts]);
    }

    public function aboutUpdate(AboutRequest $request)
    {

        $abouts = Abouts::find($request->about_id);
        $abouts->update([
            'title' => $request->title,
            'content' => $request->content0,
            'content1' => $request->content1,
            'content2' => $request->content2,
            'content3' => $request->content3,
            'step' => $request->step,
            'step1' => $request->step1,
            'step2' => $request->step2,
            'step3' => $request->step3,
            'step4' => $request->step4,
            'step5' => $request->step5,
        ]);

        return redirect()->back()->with('success', 'About başarıyla güncellendi');
    }

    public function services()
    {
        $services = Services::all()->first();

        return view('back.pages.services', ['services' => $services]);
    }

    public function servicesUpdate(ServicesRequest $request)
    {
        $services = Services::find($request->services_id);
        $services->update([
            'title' => $request->title,
            'content' => $request->description,
            'data_title' => $request->data_title,
            'data_content' => $request->data_content,
            'data_icon' => $request->data_icon,
            'call_title' => $request->call_title,
            'call_content' => $request->call_content,
            'features_title' => $request->features_title,
            'features_content' => $request->features_content,
            'features_icon' => $request->features_icon,
            'foto' => $request->foto,
            'counts_title' => $request->counts_title,
            'counts_content' => $request->counts_content,
        ]);

        return redirect()->back()->with('success', 'Services başarıyla güncellendi');
    }

    public function portfolio()
    {
        $portfolio = Portfolios::all()->first();
        return view('back.pages.portfolio', ['portfolio' => $portfolio]);
    }

    public function portfolioUpdate(PortfolioRequest $request)
    {
        $portfolio = Portfolios::find($request->portfolio_id);
        $portfolio->update([
            'title' => $request->title,
            'content' => $request->description,
            'foto' => $request->foto,
        ]);
        return redirect()->back()->with('success', 'Portfolio başarıyla güncellendi');
    }

    public function pricing()
    {
        $pricing = Pricings::all()->first();
        $pricings = Pricings::all();
        return view('back.pages.pricing', ['pricing' => $pricing], ['pricings' => $pricings]);
    }

    public function pricingUpdate(PricingRequest $request)
    {
        $pricings = Pricings::find($request->pricing_id);
        $pricings->update([
            'title' => $request->title,
            'content' => $request->description,
            'price_title' => $request->price_title,
            'price' => $request->price,
            'price_time' => $request->price_time,
            'madde1' => $request->madde1,
            'madde2' => $request->madde2,
            'madde3' => $request->madde3,
            'madde4' => $request->madde4,
            'madde5' => $request->madde5,
        ]);

        return redirect()->back()->with('success', 'Pricing başarıyla güncellendi');
    }

    public function pricingBox1()
    {
        $pricings = Pricings::all()->where('id', '1')->first();
        return view('back.pages.pricingbox1', ['pricings' => $pricings]);
    }

    public function pricingBox1Update(PricingRequest $request)
    {
        $pricings = Pricings::find($request->pricing_id);
        $pricings->update([
            'price_title' => $request->price_title,
            'price' => $request->price,
            'price_time' => $request->price_time,
            'madde1' => $request->madde1,
            'madde2' => $request->madde2,
            'madde3' => $request->madde3,
            'madde4' => $request->madde4,
            'madde5' => $request->madde5,
        ]);

        return redirect()->back()->with('success', 'Pricing Box 1 başarıyla güncellendi');
    }

    public function pricingBox2()
    {
        $pricings = Pricings::all()->where('id', '2')->first();
        return view('back.pages.pricingbox1', ['pricings' => $pricings]);
    }

    public function pricingBox2Update(PricingRequest $request)
    {
        $pricings = Pricings::find($request->pricing_id);
        $pricings->update([
            'price_title' => $request->price_title,
            'price' => $request->price,
            'price_time' => $request->price_time,
            'madde1' => $request->madde1,
            'madde2' => $request->madde2,
            'madde3' => $request->madde3,
            'madde4' => $request->madde4,
            'madde5' => $request->madde5,
        ]);

        return redirect()->back()->with('success', 'Pricing Box 2 başarıyla güncellendi');
    }

    public function pricingBox3()
    {
        $pricings = Pricings::all()->where('id', '3')->first();
        return view('back.pages.pricingbox1', ['pricings' => $pricings]);
    }

    public function pricingBox3Update(PricingRequest $request)
    {
        $pricings = Pricings::find($request->pricing_id);
        $pricings->update([
            'price_title' => $request->price_title,
            'price' => $request->price,
            'price_time' => $request->price_time,
            'madde1' => $request->madde1,
            'madde2' => $request->madde2,
            'madde3' => $request->madde3,
            'madde4' => $request->madde4,
            'madde5' => $request->madde5,
        ]);

        return redirect()->back()->with('success', 'Pricing Box 3 başarıyla güncellendi');
    }

    public function contact()
    {
        $contacts = Contactposts::orderBy('created_at', 'Asc')->get();

        return view('back.pages.contact', ['contacts' => $contacts]);
    }

    public function contactPost($id)
    {
        $contacts = Contactposts::find($id);

        return view('back.pages.contactPost', ['contacts' => $contacts]);
    }

    public function faq()
    {
        $faqs = Faqs::all()->first();

        return view('back.pages.faq', ['faqs' => $faqs]);
    }

    public function faqUpdate(FaqRequest $request)
    {
        $faqs = Faqs::find($request->faqs_id);
        $faqs->update([
            'title' => $request->title,
            'description' => $request->description,
            'question1' => $request->question1,
            'answer1' => $request->answer1,
            'question2' => $request->question2,
            'answer2' => $request->answer2,
            'question3' => $request->question3,
            'answer3' => $request->answer3,
        ]);

        return redirect()->back()->with('success', 'FAQ başarıyla güncellendi');
    }

}



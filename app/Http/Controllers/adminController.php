<?php

namespace App\Http\Controllers;

//Request
use App\Http\Requests\AboutRequest;
use App\Http\Requests\HeroRequest;
use App\Http\Requests\PortfolioRequest;
use App\Http\Requests\ServicesRequest;
use App\Models\Portfolios;
use Illuminate\Http\Request;

//Model
use App\Models\Heroes;
use App\Models\Abouts;
use App\Models\Services;



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
            'step' =>  $request->step,
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
        $portfolioes = Portfolios::find($request->portfolio_id);
        $portfolioes->update([
            'title' => $request->title,
            'content' => $request->description,
            'foto' => $request->foto,
        ]);
        return redirect()->back()->with('success', 'Portfolio başarıyla güncellendi');
    }
}

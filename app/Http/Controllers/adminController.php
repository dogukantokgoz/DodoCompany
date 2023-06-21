<?php

namespace App\Http\Controllers;

//Request
use App\Http\Requests\AboutRequest;
use App\Http\Requests\HeroRequest;
use Illuminate\Http\Request;

//Model
use App\Models\Heroes;
use App\Models\Abouts;



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

        return redirect()->back();
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

        return redirect()->back();

    }
}

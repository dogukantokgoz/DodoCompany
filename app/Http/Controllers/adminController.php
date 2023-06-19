<?php

namespace App\Http\Controllers;

//Request
use Illuminate\Http\Request;
use App\Http\Requests\heroRequest;

//Model
use App\Models\Hero;


class adminController extends Controller
{
    public function index()
    {
        return view('back.index');
    }

    public function hero()
    {
        $heroes = Hero::all()->first();

        return view('back.pages.hero', ['heroes' => $heroes]);
    }

    public function heroPost(heroRequest $request)
    {
        $heroes = Hero::find($request->hero_id);
        dd($request->all);
    }
}

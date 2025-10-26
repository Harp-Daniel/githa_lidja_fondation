<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\MissionVision;

class PublicController extends Controller
{
    public function __construct()
    {
        // Set language from URL parameter
        if (request()->has('lang')) {
            $lang = request()->get('lang');
            if (in_array($lang, ['fr', 'en'])) {
                App::setLocale($lang);
                session(['locale' => $lang]);
            }
        }

        // Set language from session if exists
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        }
    }

    public function home()
    {
        return view('public.home');
    }

    public function about()
    {
        $missionVision = MissionVision::first();
        return view('public.about', compact('missionVision'));
    }

    public function projects()
    {
        return view('public.projects');
    }

    public function news()
    {
        return view('public.news');
    }

    public function donate()
    {
        return view('public.donate');
    }

    public function volunteer()
    {
        return view('public.volunteer');
    }

    public function partners()
    {
        return view('public.partners');
    }

    public function contact()
    {
        return view('public.contact');
    }
}

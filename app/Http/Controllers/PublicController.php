<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        return view('projects');
    }

    public function news()
    {
        return view('news');
    }

    public function donate()
    {
        return view('donate');
    }

    public function volunteer()
    {
        return view('volunteer');
    }

    public function partners()
    {
        return view('partners');
    }

    public function contact()
    {
        return view('contact');
    }
}

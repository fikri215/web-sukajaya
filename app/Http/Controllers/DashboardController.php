<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\About;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Setting;

class DashboardController extends Controller
{
    public function index()
    {
        $setting = Setting::take(1)->first();
        $hero = Hero::take(1)->first();
        $about = About::take(1)->first();
        $services = Service::all();
        $categories = Category::take(4)->get();
        $galleries = Gallery::with('category')->get();
        return view('pages.frontend.index', compact('setting', 'hero', 'about', 'services', 'categories', 'galleries'));
    }

}

<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function fetchNavigation(Request $request) {
        // return Inertia::render('fetch/navigation', ['navigator' => Category::all()]);
    }

    public function fetchLatestPost(Request $request) {

    }

    public function fetchLastFivePost(Request $request) {

    }


    public function signUpNewsletter(Request $request) {

    }
}

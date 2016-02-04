<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home ()
    {
        $people = ['Lucas', 'Jill', 'Avery', 'Coen', 'Keaton'];
        return view('welcome', compact('people'));
    }

    public function about()
    {
        return view('pages.about');
    }
}

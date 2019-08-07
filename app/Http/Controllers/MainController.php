<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.main');
    }
    public function contest()
    {
        return view('pages.contest');
    }
}

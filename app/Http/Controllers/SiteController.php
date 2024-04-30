<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SiteController extends Controller
{
    function Index(){
        return Inertia::render('Index');
    }
    function Page1(){
        return Inertia::render('Page1');
    }
}

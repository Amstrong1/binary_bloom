<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function store(Request $request)
    {
        App::setLocale('fr');
        return back();
    }
}

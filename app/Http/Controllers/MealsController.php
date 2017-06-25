<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealsController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function meals() {
        return view('pages.meals');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealsController extends Controller
{
    public function index() {
        $name = 'Test Name';
        return view('pages.index')->with('name', $name);
    }

    public function meals() {
        return view('pages.meals');
    }

    public function create() {
        return view('pages.create');
    }
}

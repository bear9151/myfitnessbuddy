<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Meal;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $meals = Meal::orderby('created_at','desc')->where('user_id', $user_id)->whereDate('created_at', '=', date('Y-m-d'))->get();
        return view('dashboard', compact ('meals'));
    }
}

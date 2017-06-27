<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::orderby('created_at','desc')->paginate(10);
        return view('meals.index', compact ('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        // Create Meal
        $meal = new Meal;
        $meal->name = $request->input('name');
        $meal->user_id = auth()->user()->id;
        $meal->save();

        return redirect('/meals')->with('success', 'Meal Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meal = Meal::find($id);
        return view('meals.show', compact ('meal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meal = Meal::find($id);
        return view('meals.edit', compact ('meal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        // Update Meal
        $meal = Meal::find($id);
        $meal->name = $request->input('name');
        $meal->save();

        return redirect('/meals')->with('success', 'Meal Name Changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meal = Meal::find($id);
        $meal->delete();

        return redirect('/meals')->with('success', 'Meal Deleted');
    }
}

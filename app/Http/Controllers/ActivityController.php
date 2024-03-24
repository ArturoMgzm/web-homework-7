<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = activity::all(); 

        return view('activity.index', compact('activities')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activity.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
            'name' => 'required|max:75', 
            'type' => 'required|max:75', 
            'date' => 'required',
          ]); 
          activity::create($validatedData); 
        
          return redirect('/activity')->with('success', 'Activity is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = activity::findOrFail($id); 

        return view('activity.show', compact('activity')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = activity::findOrFail($id); 

        return view('activity.edit', compact('activity')); 
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
        $validatedData = $request->validate([ 
            'name' => 'required|max:75', 
            'type' => 'required|max:75', 
            'date' => 'required', 
          ]); 
          activity::whereId($id)->update($validatedData); 
        
          return redirect('/activity')->with('success', 'Activity data is successfully updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = activity::findOrFail($id); 
        $activity->delete(); 

        return redirect('/activity')->with('success', 'Activity data is successfully deleted'); 
    }
}

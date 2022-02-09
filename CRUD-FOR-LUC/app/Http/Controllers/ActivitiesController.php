<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Activities::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activities::create(request()->all());
        return $activities;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function show(Activities $activities)
    {
        return Activities::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function edit(Activities $activities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $activities = Activities::FindorFail($id);
        $activities->fill($request->only(['author', 'description', 'duration', 'name','nbStars','price','cover']));
        $activities->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $activities = Activities::find($id);
        $activities -> delete(); 
    }
}

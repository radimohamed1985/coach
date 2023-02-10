<?php

namespace App\Http\Controllers;

use App\Models\sport;
use App\Http\Requests\StoresportRequest;
use App\Http\Requests\UpdatesportRequest;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function show(sport $sport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit(sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesportRequest  $request
     * @param  \App\Models\sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesportRequest $request, sport $sport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy(sport $sport)
    {
        //
    }
}

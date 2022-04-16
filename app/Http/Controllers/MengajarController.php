<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMengajarRequest;
use App\Http\Requests\UpdateMengajarRequest;
use App\Models\Mengajar;

class MengajarController extends Controller
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
    public function read()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMengajarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMengajarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Mengajar $mengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function edit(Mengajar $mengajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMengajarRequest  $request
     * @param  \App\Models\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMengajarRequest $request, Mengajar $mengajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mengajar $mengajar)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBidangKeahlianRequest;
use App\Http\Requests\UpdateBidangKeahlianRequest;
use App\Models\BidangKeahlian;
use Illuminate\Http\Request;

class BidangKeahlianController extends Controller
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
        return view('bidangKeahlian.read');
    }

    public function showCreate()
    {
        return view('bidangKeahlian.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBidangKeahlianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function saveCreate(Request $request)
    {
        
        $request->validate([
            'namaBidangKeahlian' => ['required', 'string', 'max:255'],
        ]);
        
        $bidangKeahlian = BidangKeahlian::create([
            'namaBidangKeahlian' => $request->namaBidangKeahlian,
        ]);

        return redirect("/bidangKeahlian");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BidangKeahlian  $bidangKeahlian
     * @return \Illuminate\Http\Response
     */
    public function show(BidangKeahlian $bidangKeahlian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BidangKeahlian  $bidangKeahlian
     * @return \Illuminate\Http\Response
     */
    public function edit(BidangKeahlian $bidangKeahlian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBidangKeahlianRequest  $request
     * @param  \App\Models\BidangKeahlian  $bidangKeahlian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBidangKeahlianRequest $request, BidangKeahlian $bidangKeahlian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BidangKeahlian  $bidangKeahlian
     * @return \Illuminate\Http\Response
     */
    public function destroy(BidangKeahlian $bidangKeahlian)
    {
        //
    }
}

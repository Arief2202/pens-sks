<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBidangKeahlianRequest;
use App\Http\Requests\UpdateBidangKeahlianRequest;
use App\Models\BidangKeahlian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Hello
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
    public function read()
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        }
        $viewBidangKeahlian = BidangKeahlian::all();
        return view('bidangKeahlian.read', [
            'bidangKeahlian' => $viewBidangKeahlian,
        ]);
    }

    public function showCreate()
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        }
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
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        }
        $request->validate([
            'namaBidangKeahlian' => ['required', 'string', 'max:255'],
        ]);
        $queryBidkah = BidangKeahlian::where('namaBidangKeahlian', '=', $request->namaBidangKeahlian)->first();
       
        if($queryBidkah){
            return view('bidangKeahlian.create', [
                'errorMessage' => 'Data sudah ada di database',
            ]);
        }
        else{
            $bidangKeahlian = BidangKeahlian::create([
                'namaBidangKeahlian' => $request->namaBidangKeahlian,
            ]);

            return redirect("/bidangKeahlian");
        }
        
    }

    public function showUpdate($id, Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        }
        $bidkah = BidangKeahlian::where('id', $id)->first();
        return view('bidangKeahlian.update', [
            'bidangKeahlian' => $bidkah,
        ]);
    }

    public function saveUpdate(Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        }
        $queryBidkah = BidangKeahlian::where('id', $request->idBidangKeahlian)->first();
        $queryValid = BidangKeahlian::where('namaBidangKeahlian', '=', $request->namaBidangKeahlian)->first();
        $request->validate([
            'namaBidangKeahlian' => ['required', 'string', 'max:255'],
        ]);
        if($queryValid){
            $bidkah = BidangKeahlian::where('id', $request->idBidangKeahlian)->first();
            return view('bidangKeahlian.update', [
                'errorMessage' => 'Data sudah ada di database',
                'bidangKeahlian' => $bidkah,
            ]);
        }
        else{
            $queryBidkah['namaBidangKeahlian'] = $request->namaBidangKeahlian;
            $queryBidkah->save();
            return redirect("/bidangKeahlian");
        }
        
    }
}

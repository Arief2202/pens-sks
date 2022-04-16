<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKurikulumRequest;
use App\Http\Requests\UpdateKurikulumRequest;
use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
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
        return view('kurikulum.read');
    }

    public function showCreate()
    {
        return view('kurikulum.create');
    }

    public function saveCreate(Request $request)
    {
        
        $request->validate([
            'namaKurikulum' => ['required', 'string', 'max:255'],
        ]);

        $kurikulum = Kurikulum::create([
            'namaKurikulum' => $request->namaKurikulum,
        ]);

        return redirect("/kurikulum");
    }

    public function showUpdate()
    {
        return view('kurikulum.update');
    }

    public function saveUpdate(Request $request)
    {
        $request->validate([
            'namaKurikulum' => ['required', 'string', 'max:255'],
        ]);

        $kurikulum = Kurikulum::create([
            'namaKurikulum' => $request->namaKurikulum,
        ]);

        return redirect("/kurikulum");
    }

    public function destroy(Kurikulum $kurikulum)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKurikulumRequest;
use App\Http\Requests\UpdateKurikulumRequest;
use App\Models\NamaKurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NamaKurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $viewKurikulum = NamaKurikulum::all();
        return view('kurikulum.read', [
            'kurikulums' => $viewKurikulum,
        ]);
    }

    public function history()
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $viewKurikulum = NamaKurikulum::all();
        return view('kurikulum.history', [
            'kurikulums' => $viewKurikulum,
        ]);
    }

    public function showCreate()
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        return view('kurikulum.create');
    }

    public function saveCreate(Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $request->validate([
            'namaKurikulum' => ['required', 'string', 'max:255'],
        ]);
        $queryValid = NamaKurikulum::where('namaKurikulum', '=', $request->namaKurikulum)->first();
        if($queryValid){
            return view('kurikulum.create', [
                'errorMessage' => 'Data sudah ada di database',
            ]);
        }
        else{
            $kurikulum = NamaKurikulum::create([
                'namaKurikulum' => $request->namaKurikulum,
            ]);

            return redirect("/nama-kurikulum");    
        }
    }

    public function showUpdate($id, Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $kuri = NamaKurikulum::where('id', $id)->first();
        return view('kurikulum.update', [
            'kurikulum' => $kuri,
        ]);
    }

    public function saveUpdate(Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $request->validate([
            'namaKurikulum' => ['required', 'string', 'max:255'],
        ]);
        $queryKuri = NamaKurikulum::where('id', $request->idKurikulum)->first();
        $queryValid = NamaKurikulum::where('namaKurikulum', '=', $request->namaKurikulum)->first();
        if($queryValid){
            $kuri = NamaKurikulum::where('id', $request->idKurikulum)->first();
            return view('kurikulum.update', [
                'kurikulum' => $kuri,
                'errorMessage' => 'Data sudah ada di database',
            ]);
        }
        else{
            $queryKuri['namaKurikulum'] = $request->namaKurikulum;
            $queryKuri->save();
            return redirect("/nama-kurikulum");
        }
    }

    public function destroy(Kurikulum $kurikulum)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
    }
}

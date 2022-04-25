<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaketKurikulumRequest;
use App\Http\Requests\UpdatePaketKurikulumRequest;
use Illuminate\Support\Facades\Auth; 
use App\Models\PaketKurikulum;
use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\Kurikulum;

class PaketKurikulumController extends Controller
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
    public function read(Request $request)
    {
        $paketKurikulums = PaketKurikulum::where('tingkat', '=', $request->tingkat)
                                        ->where('prodi', '=', $request->prodi)
                                        ->where('semester', '=', $request->semester)
                                        ->where('kurikulum_id', '=', $request->kurikulum)->get();
        return view('paketKurikulum.read', [
            'request' => $request,
            'paketKurikulums' => $paketKurikulums,
            'kurikulums' => Kurikulum::all(),
            'mataKuliahs' => MataKuliah::all(),
        ]);
    }
    public function create(Request $request){
        $request->validate([
            'tingkat' => ['required', 'string', 'max:255'],
            'prodi' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'kurikulum' => ['required', 'string', 'max:255'],
            'idMataKuliah' => ['required', 'string', 'max:255']
        ]);

        $paketKurikulum = PaketKurikulum::create([
            'mataKuliah_id' => $request->idMataKuliah,
            'kurikulum_id' => $request->kurikulum,
            'tingkat' => $request->tingkat,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
        ]);
        return redirect("/paketKurikulum?tingkat=$request->tingkat&prodi=$request->prodi&semester=$request->semester&kurikulum=$request->kurikulum");
    }
    public function delete( Request $request){
        $paketKurikulum = PaketKurikulum::where('id', $request->id)->first();
        
        // $daftarBidangKeahlian = DaftarBidangKeahlian::where('dosen_id', $id)->get();
        if(Auth::user()->role == 1){
            // foreach($daftarBidangKeahlian as $daftarbidkah){
                $paketKurikulum->delete();
            // }
            // $dosen->delete();
        }
        return redirect("/paketKurikulum?tingkat=$request->tingkat&prodi=$request->prodi&semester=$request->semester&kurikulum=$request->kurikulum");
    }
}

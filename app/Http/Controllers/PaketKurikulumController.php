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
    public function read(Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        $paketKurikulums = PaketKurikulum::where('prodi', '=', $request->prodi)
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
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        $request->validate([
            'prodi' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'kurikulum' => ['required', 'string', 'max:255'],
            'idMataKuliah' => ['required', 'string', 'max:255']
        ]);
        $queryValid = PaketKurikulum::where('mataKuliah_id', '=', $request->idMataKuliah)
                                    ->where('prodi', '=', $request->prodi)
                                    ->where('semester', '=', $request->semester)
                                    ->where('kurikulum_id', '=', $request->kurikulum)->first();
        if($queryValid){
            $paketKurikulums = PaketKurikulum::where('prodi', '=', $request->prodi)
                                             ->where('semester', '=', $request->semester)
                                             ->where('kurikulum_id', '=', $request->kurikulum)->get();
            return view('paketKurikulum.read', [
                'request' => $request,
                'paketKurikulums' => $paketKurikulums,
                'kurikulums' => Kurikulum::all(),
                'mataKuliahs' => MataKuliah::all(),
                'errorMessage' => 'Data sudah ada di database',
            ]);
        }
        else{
            $paketKurikulum = PaketKurikulum::create([
                'mataKuliah_id' => $request->idMataKuliah,
                'prodi' => $request->prodi,
                'semester' => $request->semester,
                'kurikulum_id' => $request->kurikulum,
            ]);
            return redirect("/paketKurikulum?prodi=$request->prodi&semester=$request->semester&kurikulum=$request->kurikulum");    
        }
        
    }

    public function delete( Request $request){
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
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

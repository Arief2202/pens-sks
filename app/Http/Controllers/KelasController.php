<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;
use App\Models\Kelas;
use App\Models\Kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{

    public function read()
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $viewKelas = Kelas::all();
        return view('kelas.read', [
            'kelas' => $viewKelas
        ]);
    }

    public function showCreate()
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $namaKurikulum = Kurikulum::all();
        return view('kelas.create', [
            'kurikulum' => $namaKurikulum,
        ]);
    }
    // kalau namanya kan A,B tok, iki validate e piye

    public function saveCreate(Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $request->validate([
            'namaKelas' => ['required', 'string', 'max:255'],
            'idKurikulum' => ['required', 'int', 'max:20'],
            'tingkat' => ['required', 'string', 'max:255'],
            'prodi' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'startTahunAjaran' => ['required', 'string', 'max:255'],
        ]);
        $queryValid = Kelas::where('namaKelas', '=', $request->namaKelas)
                            ->where('tingkat', '=', $request->tingkat)
                            ->where('prodi', '=', $request->prodi)
                            ->where('semester', '=', $request->semester)
                            ->first();
        if($queryValid){
            $namaKurikulum = Kurikulum::all();
            return view('kelas.create', [
                'kurikulum' => $namaKurikulum,
                'errorMessage' => 'Data sudah ada di database',
            ]);
        }
        else{
            $paketKurikulum = Kelas::create([
                'namaKelas' => $request->namaKelas,
                'kurikulum_id' => $request->idKurikulum,
                'tingkat' => $request->tingkat,
                'prodi' => $request->prodi,
                'semester' => $request->semester,
                'startTahunAjaran' => $request->startTahunAjaran,
            ]);
            return redirect("/kelas");
        }
        
    }

    public function showUpdate($id, Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $kls = Kelas::where('id', $id)->first();
        $kuri = Kurikulum::all();
        return view('kelas.update', [
            'kelas' => $kls,
            'kurikulum' => $kuri,
        ]);
    }

    public function saveUpdate(Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $request->validate([
            'namaKelas' => ['required', 'string', 'max:255'],
            'idKurikulum' => ['required', 'int', 'max:20'],
            'tingkat' => ['required', 'string', 'max:255'],
            'prodi' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'startTahunAjaran' => ['required', 'string', 'max:255'],
        ]);
        $queryKelas = Kelas::where('id', $request->idKelas)->first();
        $queryValid = Kelas::where('namaKelas', '=', $request->namaKelas)
                            ->where('tingkat', '=', $request->tingkat)
                            ->where('prodi', '=', $request->prodi)
                            ->where('semester', '=', $request->semester)
                            ->where('id', '!=', $request->idKelas)
                            ->first();
        if($queryValid){
            $kls = Kelas::where('id', $request->idKelas)->first();
            $kuri = Kurikulum::all();
            return view('kelas.update', [
                'kelas' => $kls,
                'kurikulum' => $kuri,
                'errorMessage' => 'Data sudah ada di database',
            ]);
        }
        else{
            $queryKelas['namaKelas'] = $request->namaKelas;
            $queryKelas['kurikulum_id'] = $request->idKurikulum;
            $queryKelas['tingkat'] = $request->tingkat;
            $queryKelas['prodi'] = $request->prodi;
            $queryKelas['semester'] = $request->semester;
            $queryKelas['startTahunAjaran'] = $request->startTahunAjaran;
            $queryKelas->save();
            return redirect("/kelas");    
        }
        
    }

    
    public function deleteKelas($id, Request $request){
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        
        $kelas = Kelas::where('id', $id)->first();
        $kelas->delete();
        return redirect("/kelas");
    }
}

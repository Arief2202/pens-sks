<?php

namespace App\Http\Controllers;
use App\Models\DaftarBidangKeahlian;
use App\Models\Mengajar;
use App\Models\Kelas;
use App\Models\PaketKurikulum;
use App\Models\NamaKurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MengajarController extends Controller
{

    public function read(Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $cariKelas = Kelas::where('prodi', '=', $request->prodi)
                          ->where('semester', '=', $request->semester)
                          ->first();
        $listPengampu = NULL;
        $matkul = NULL;
        $mengajar=NULL;
        // $mengajar = Mengajar::where('kelas_id', '=', $request->kelas)->get();
        if($request->paketKurikulum){
            $matkul = PaketKurikulum::where('id', '=', $request->paketKurikulum)->first()->mataKuliah();
            $listPengampu = DaftarBidangKeahlian::where('bidangKeahlian_id', '=', $matkul->bidangKeahlian_id)->get();
        }
        
            
        if(!isset($request->prodi)) $request->prodi="";
        if(!isset($request->semester)) $request->semester="";

        $kelas = "";
        if($request->prodi != "" && $request->semester != ""){
            $kelas = Kelas::where('prodi', '=', $request->prodi)
                          ->where('semester', '=', $request->semester)
                          ->first();
            $mengajar = Mengajar::where('prodi', '=', $request->prodi)
                                ->where('semester', '=', $request->semester)
                                ->get();
        }
        return view('mengajar.read',[
            'kurikulums' => NamaKurikulum::all(),
            'request' => $request,
            'kelas' => $kelas,
            'paketKurikulums' => PaketKurikulum::all(),
            'mengajarAll' => Mengajar::all(),
            'mengajar' => $mengajar,
            'cariKelas' => $cariKelas,
            'listPengampu' => $listPengampu,
            'matkul' => $matkul,
        ]);        
    }

    public function create(Request $request)
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };

        $request->validate([
            'mataKuliah_id' => ['required', 'string', 'max:255'],
            'dosen_id' => ['required', 'string', 'max:255'],
            'prodi' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
            'kelas' => ['required', 'string', 'max:255'],
        ]);
        
        Mengajar::create([            
            'mataKuliah_id' => $request->mataKuliah_id,
            'dosen_id' => $request->dosen_id,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
        ]);
        return redirect("/mengajar?prodi=".$request->prodi."&semester=".$request->semester);
    }

    public function ubahKurikulum(Request $request){
        if(Auth::user()->role != 1){
            return redirect('dashboard');
        }

        if(!$request->kurikulum){
            $kelas = Kelas::findOrFail($request->idKelas);
            return redirect("/mengajar?prodi=".$kelas->prodi."&semester=".$kelas->semester);
        }
        else{
            $kelas = Kelas::findOrFail($request->idKelas);
            $kelas->kurikulum_id = $request->kurikulum;
            foreach(Mengajar::where('prodi', '=', $kelas->prodi)
                            ->where('semester', '=', $kelas->semester)
                            ->get() as $found) $found->delete();
            $kelas->save();
            return redirect("/mengajar?prodi=".$kelas->prodi."&semester=".$kelas->semester);
        }
    }
    
    public function delete(Request $request){
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        
        $mengajar = Mengajar::findOrFail($request->mengajar_id);
        $mengajar->delete();
        return redirect("/mengajar?prodi=".$request->prodi."&semester=".$request->semester);
    }

    public function lihat(){
        $returnText = "";
        foreach(Mengajar::all() as $mengajar){
            $returnText .= "['mataKuliah_id' => '$mengajar->mataKuliah_id', 'dosen_id' => '$mengajar->dosen_id', 'prodi' => '$mengajar->prodi', 'semester' => '$mengajar->semester', 'kelas' => '$mengajar->kelas'],<br>";
        }
        return $returnText;
    }
}

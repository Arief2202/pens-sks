<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMengajarRequest;
use App\Http\Requests\UpdateMengajarRequest;
use App\Models\DaftarBidangKeahlian;
use App\Models\Mengajar;
use App\Models\Kelas;
use App\Models\PaketKurikulum;
use App\Models\MataKuliah;
use App\Models\Kurikulum;
use Illuminate\Http\Request;


class MengajarController extends Controller
{
    public function read(Request $request)
    {
        $cariKelas = Kelas::where('id', $request->kelas)->first();
        $listPengampu = NULL;
        $matkul = NULL;
        $mengajar = Mengajar::where('kelas_id', '=', $request->kelas)->get();
        if($request->paketKurikulum){
            $matkul = PaketKurikulum::where('id', '=', $request->paketKurikulum)->first()->mataKuliah();
            $listPengampu = DaftarBidangKeahlian::where('bidangKeahlian_id', '=', $matkul->bidangKeahlian_id)->get();
        }

        return view('mengajar.read',[
            'request' => $request,
            'kelas' => Kelas::all(),
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
        $request->validate([
            'dosen_id' => ['required', 'string', 'max:255'],
            'kelas' => ['required', 'string', 'max:255'],
            'paketKurikulum' => ['required', 'string', 'max:255'],
        ]);
        
        // $queryValid = User::where('nip', '=', $request->nip)
        //                     ->where('email', '=', $request->email)
        //                     ->first();
        // if($queryValid){
        //     return view('dosen.create', [
        //         "errorMessage" => 'Data sudah ada di database',
        //     ]);
        // }
        // else{
        //     $dosen = User::create([
        //         'nip' => $request->nip,
        //         'nama' => $request->nama,
        //         'email' => $request->email,
        //         'password' => '$2y$10$P1cEQWYjiF4eiaKc04c/he4c3bWzQ9gMyvcsieJjsdW04jhmIUkqu',
        //         'creditSKS' => '0',
        //         'role' => '2', //1 = admin (kaprodi), 2 = dosen biasa 
        //         'darkMode' => '0',
        //         'openSideBar' => '1',
        //     ]);

        //     return redirect("/dosen");
        // }


        $paketKurikulum = Mengajar::create([
            'dosen_id' => $request->dosen_id,
            'kelas_id' => $request->kelas,
            'mataKuliah_id' => PaketKurikulum::where('id', $request->paketKurikulum)->first()->mataKuliah_id,
        ]);
        return redirect("/kelas/mengajar?kelas=".$request->kelas);
    }

    
    public function delete(Request $request){
        $kelas = Mengajar::where('id', $request->mengajar_id)->first();
        $kelas->delete();
        return redirect("/kelas/mengajar?kelas=".$request->kelas_id);
    }
}

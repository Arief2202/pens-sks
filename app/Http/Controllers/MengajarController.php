<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMengajarRequest;
use App\Http\Requests\UpdateMengajarRequest;
use App\Models\Mengajar;
use App\Models\Kelas;
use App\Models\PaketKurikulum;
use App\Models\MataKuliah;
use App\Models\Kurikulum;


class MengajarController extends Controller
{
    public function read()
    {
        return view('mengajar.read',[
            'kelas' => Kelas::all(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DaftarBidangKeahlian;
use App\Models\Mengajar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function read(Request $request)
    {
        $request->idDosen = Auth::user()->id;
        if(Auth::user()->role == 2){
            return view('dashboard.dosen', [
                'request' => $request,
                'user' => Auth::user(),
                'daftarbidkah' => DaftarBidangKeahlian::all(),
                'mengajars' => Mengajar::where('dosen_id', '=', Auth::user()->id)->get()
            ]);
        }
        else{
            return redirect('/dosen');
        }
        
    }

    
}

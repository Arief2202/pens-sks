<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; 
use App\Models\User;
use App\Models\BidangKeahlian;
use App\Models\DaftarBidangKeahlian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Dosen;
use App\Models\Mengajar;
 
class DosenController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function read()
    {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        return view('dosen.read', [
            'user' => User::all(),
            'daftarbidkah' => DaftarBidangKeahlian::all(),
            'mengajar' => Mengajar::all()
        ]);
    }
    public function showCreate(){
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        return view('dosen.create');
    }
    public function saveCreate(Request $request){   
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };     
        $request->validate([
            'nip' => ['required', 'string', 'max:255'],
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
        ]);
        $queryValid = User::where('nip', '=', $request->nip)
                            ->where('email', '=', $request->email)
                            ->first();
        if($queryValid){
            return view('dosen.create', [
                "errorMessage" => 'Data sudah ada di database',
            ]);
        }
        else{
            $dosen = User::create([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => '$2y$10$P1cEQWYjiF4eiaKc04c/he4c3bWzQ9gMyvcsieJjsdW04jhmIUkqu',
                'bebanMengajar' => '0',
                'role' => '2', //1 = admin (kaprodi), 2 = dosen biasa 
                'darkMode' => '0',
                'openSideBar' => '1',
            ]);

            return redirect("/dosen");
        }
        
    }
    
    public function viewEditBiodata($id, Request $request){
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        $dosen = User::where('id', $id)->first();
        $daftarbidkah = DaftarBidangKeahlian::where('dosen_id', $id);
        return view('dosen.update', [
            "dosen" => $dosen
        ]);
    }
    public function updateEditBiodata(Request $request){  
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
              
        $request->validate([
            'nip' => ['required', 'string', 'max:255'],
            'nama' => ['required', 'string', 'max:255'],
            'alias' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'bebanMengajar' => ['required', 'integer', 'max:255'],
            'role' => ['required', 'integer', 'max:255'],
        ]);
        // dd($request);
        $queryDosen = User::where('id', $request->idDosen)->first();
        $queryValid = User::where('id', '!=', $request->idDosen)
                            ->where('nip', '=', $request->nip)
                            ->where('email', '=', $request->email)
                            ->first();
        // $queryValid2 = User::where('nip', '=', $request->nip)
        //                     ->where('email', '=', $request->email)
        //                     ->first();
        if($request->password != $queryDosen->password){
            $request->password = Hash::make($request->password);
        }
        if($queryValid){
            $dosen = User::where('id', $request->idDosen)->first();
            $daftarbidkah = DaftarBidangKeahlian::where('dosen_id', $request->idDosen);
            return view('dosen.update', [
                "dosen" => $dosen,
                "errorMessage" => 'Data sudah ada di database',
            ]);
        }
        // else if($queryValid2){
        //     $dosen = User::where('id', $request->idDosen)->first();
        //     $daftarbidkah = DaftarBidangKeahlian::where('dosen_id', $request->idDosen);
        //     return view('dosen.update', [
        //         "dosen" => $dosen,
        //         "errorMessage" => 'Data sudah ada di database',
        //     ]);
        // }
        else{
            $queryDosen['nip'] = $request->nip;
            $queryDosen['nama'] = $request->nama;
            $queryDosen['alias'] = $request->alias;
            $queryDosen['email'] = $request->email;
            $queryDosen['password'] = $request->password;
            $queryDosen['bebanMengajar'] = $request->bebanMengajar;
            $queryDosen['role'] = $request->role;
            $queryDosen->save();
            return redirect("/dosen");
        }
    }
    public function deleteDosen($id, Request $request){
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        $dosen = User::findOrFail($id);
        
        $daftarBidangKeahlian = DaftarBidangKeahlian::where('dosen_id', $id)->get();
        if(Auth::user()->role == 1){
            foreach($daftarBidangKeahlian as $daftarbidkah){
                $daftarbidkah->delete();
            }
            $dosen->delete();
        }
        return redirect("/dosen");
    }
    public function viewEditBidangKeahlian($id, Request $request){
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        $dosen = User::findOrFail($id);
        $bidkah = BidangKeahlian::all();
        $daftarbidkah = DaftarBidangKeahlian::where('dosen_id', $id)->get();
        return view('dosen.updateBidangKeahlian', [
            "dosen" => $dosen,
            "bidangKeahlian" => $bidkah,
            "daftarBidangKeahlian" => $daftarbidkah,
        ]);
    }
    public function saveEditBidangKeahlian(Request $request){
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        $request->validate([
            'idDosen' => ['required', 'int', 'max:255'],
            'idBidangKeahlian' => ['required', 'int', 'max:255']
        ]);
        $queryValid = DaftarBidangKeahlian::where('dosen_id', '=', $request->idDosen)
                                            ->where('bidangKeahlian_id', '=', $request->idBidangKeahlian)
                                            ->first();
        // dd($queryValid);
        if($queryValid){
            $dosen = User::findOrFail($request->idDosen);
            $bidkah = BidangKeahlian::all();
            $daftarbidkah = DaftarBidangKeahlian::where('dosen_id', $request->idDosen)->get();
            return view('dosen.updateBidangKeahlian', [
                "dosen" => $dosen,
                "bidangKeahlian" => $bidkah,
                "daftarBidangKeahlian" => $daftarbidkah,
                "errorMessage" => 'Data sudah ada di database',
            ]);
        }
        else{
            $paketKurikulum = DaftarBidangKeahlian::create([
                'dosen_id' => $request->idDosen,
                'bidangKeahlian_id' => $request->idBidangKeahlian,
            ]);
            return redirect("/dosen/update/bidangKeahlian/$request->idDosen");
        }
        
    }
    public function deleteEditBidangKeahlian(Request $request){
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        $daftarBidangKeahlian = DaftarBidangKeahlian::where('id', $request->idDaftarBidKah)->first();
        $daftarBidangKeahlian->delete();
        return redirect("/dosen/update/bidangKeahlian/$request->idDosen");
    }

    public function bebanDosen(Request $request) {
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        return view('dosen.beban', [
            'user' => User::all(),
            'daftarbidkah' => DaftarBidangKeahlian::all(),
            'mengajar' => Mengajar::all()
        ]);
    }

    public function detailBebanDosen($id, Request $request){
        if(Auth::user()->role == 2){
            return redirect('dashboard');
        };
        return view('dosen.detailBeban', [
            'request' => $request,
            'user' => User::all(),
            'daftarbidkah' => DaftarBidangKeahlian::all(),
            'idDosen' => $id,
            'mengajars' => Mengajar::where('dosen_id', '=', $id)->get(),
        ]);
    }
}

<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; 
use App\Models\User;
use App\Models\BidangKeahlian;
use App\Models\DaftarBidangKeahlian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Dosen;
 
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
        $viewDosen = User::all();        
        $daftarbidkah = DaftarBidangKeahlian::all();
        return view('dosen.read', [
            'user' => $viewDosen,
            'daftarbidkah' => $daftarbidkah,
        ]);
    }
    public function showCreate(){
        return view('dosen.create');
    }
    public function saveCreate(Request $request){        
        $request->validate([
            'nip' => ['required', 'string', 'max:255'],
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
        ]);
        
        $dosen = User::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => '$2y$10$P1cEQWYjiF4eiaKc04c/he4c3bWzQ9gMyvcsieJjsdW04jhmIUkqu',
            'creditSKS' => '0',
            'role' => '2', //1 = admin (kaprodi), 2 = dosen biasa 
            'darkMode' => '0',
            'openSideBar' => '1',
        ]);

        return redirect("/dosen");
    }
    
    public function viewEditBiodata($id, Request $request){
        $dosen = User::where('id', $id)->first();
        $daftarbidkah = DaftarBidangKeahlian::where('dosen_id', $id);
        return view('dosen.update', [
            "dosen" => $dosen
        ]);
    }
    public function updateEditBiodata(Request $request){        
        $queryDosen = User::where('id', $request->idDosen)->first();      
        $request->validate([
            'nip' => ['required', 'string', 'max:255'],
            'nama' => ['required', 'string', 'max:255'],
            'alias' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'sks' => ['required', 'integer', 'max:255'],
            'role' => ['required', 'integer', 'max:255'],
        ]);
        if($request->password != $queryDosen->password){
            $request->password = Hash::make($request->password);
        }
        $queryDosen['nip'] = $request->nip;
        $queryDosen['nama'] = $request->nama;
        $queryDosen['alias'] = $request->alias;
        $queryDosen['email'] = $request->email;
        $queryDosen['password'] = $request->password;
        $queryDosen['creditSKS'] = $request->sks;
        $queryDosen['role'] = $request->role;
        $queryDosen->save();
        return redirect("/dosen");
    }
    public function deleteDosen($id, Request $request){
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
        $request->validate([
            'idDosen' => ['required', 'int', 'max:255'],
            'idBidangKeahlian' => ['required', 'int', 'max:255']
        ]);
        $paketKurikulum = DaftarBidangKeahlian::create([
            'dosen_id' => $request->idDosen,
            'bidangKeahlian_id' => $request->idBidangKeahlian,
        ]);
        return redirect("/dosen/update/bidangKeahlian/$request->idDosen");
    }
    public function deleteEditBidangKeahlian(Request $request){
        $daftarBidangKeahlian = DaftarBidangKeahlian::where('id', $request->idDaftarBidKah)->first();
        $daftarBidangKeahlian->delete();
        return redirect("/dosen/update/bidangKeahlian/$request->idDosen");
    }

}
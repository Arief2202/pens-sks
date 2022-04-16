<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;

 
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
        return view('dosen.read');
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
}
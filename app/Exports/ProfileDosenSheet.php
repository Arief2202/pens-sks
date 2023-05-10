<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use App\Models\User;
use App\Models\DaftarBidangKeahlian;
use App\Models\Bidangkeahlian;

class ProfileDosenSheet implements WithTitle, FromCollection, ShouldAutoSize
{
    public function collection()
    {
        $dosens = User::all();
        $data[0] = ['NIP', 'Nama Lengkap', 'Nama Panggilan', 'Email', 'Beban Mengajar', 'Jabatan', 'Bidang Keahlian'];
        $index = 1;
        foreach($dosens as $dosen){
            $bidkah = "";
            foreach(DaftarBidangKeahlian::where('dosen_id', '=', $dosen->id)->get() as $bidkahDosen){
                if($bidkah == "") $bidkah .= $bidkahDosen->bidangKeahlian()->namaBidangKeahlian;
                else{
                    $bidkah .= ", ";
                    $bidkah .= $bidkahDosen->bidangKeahlian()->namaBidangKeahlian;

                }
            }
            $data[$index++] = [
                (String) $dosen->nip,
                $dosen->nama,
                $dosen->alias,
                $dosen->email,
                (String) $dosen->bebanMengajar,
                $dosen->role == '1' ? "Kaprodi" : "Dosen",
                $bidkah,
            ];         
        }
        return collect($data);
    }
    public function title(): string
    {
        return 'Profile Dosen';
    }
}
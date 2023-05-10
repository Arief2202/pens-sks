<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use App\Models\User;
use App\Models\Mengajar;
use App\Models\MataKuliah;

class PembebananDosenSheet implements WithTitle, FromCollection, ShouldAutoSize
{
    public function collection()
    {
        $index = 0;
        foreach(User::all() as $dosen){

            $data[$index++] = ['Dosen', 'Tempat Mengajar', 'Mata Kuliah', 'Beban', 'SKS'];
            $first = true;
            foreach(Mengajar::where("dosen_id", "=", $dosen->id)->get() as $mengajar){
                $matkul = MataKuliah::where('id', '=', $mengajar->mataKuliah_id)->first();
                $data[$index++] = [
                    $first ? $dosen->nama : "", //ngeprint namanya sekali saja (hanya ketika $first nya true)
                    $mengajar->prodi." Semester ".(String) $mengajar->semester,
                    $matkul->namaMataKuliah,
                    (String)$matkul->jam,
                    (String)$matkul->sks,
                ];         
                $first=false;
            }
            if($first) $data[$index++] = [$dosen->nama, "", "", "",""]; //kalo dosen tsb ga ada di database mengajar, auto ngeprint namanya aja
            $data[$index++] = ["", "", "","", ""]; //kasih space sebelum dosen berikutnya
        }
        return collect($data);
    }
    public function title(): string
    {
        return 'Pembebanan Dosen';
    }
}
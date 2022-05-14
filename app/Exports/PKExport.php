<?php

namespace App\Exports;

use App\Models\Kurikulum;
use App\Models\MataKuliah;
use App\Models\PaketKurikulum;
use Maatwebsite\Excel\Concerns\FromCollection;

class PKExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $paketKurikulums = PaketKurikulum::all();
        $data[0] = ['Prodi', 'Semester', 'Kurikulum', 'Mata Kuliah', 'Jam', 'SKS'];
        $index = 1;
        foreach($paketKurikulums as $paketKurikulum){
            $data[$index++] = [
                $paketKurikulum->prodi,
                (String) $paketKurikulum->semester,
                Kurikulum::where('id', '=', $paketKurikulum->kurikulum_id)->first()->namaKurikulum,
                MataKuliah::where('id', '=', $paketKurikulum->mataKuliah_id)->first()->namaMataKuliah,
                MataKuliah::where('id', '=', $paketKurikulum->mataKuliah_id)->first()->jam,
                MataKuliah::where('id', '=', $paketKurikulum->mataKuliah_id)->first()->sks,
            ];         
        }
        return collect($data);
    }
}

<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use App\Models\Kurikulum;
use App\Models\PaketKurikulum;
use App\Models\MataKuliah;

class MengajarSheet implements WithTitle, FromCollection, ShouldAutoSize
{ 
    protected $namaKurikulum;
    
    public function __construct(String $namaKurikulum)
    {
        $this->namaKurikulum = $namaKurikulum;
    }
    public function collection()
    {
        $namaKuri = Kurikulum::where('namaKurikulum', '=', $this->namaKurikulum)->first();
        $paketKurikulums = PaketKurikulum::where('kurikulum_id', '=', $namaKuri->id)->get();

        $data[0] = ['Prodi', 'Semester', 'Mata Kuliah', 'SKS', 'Jam'];
        $index = 1;
        foreach($paketKurikulums as $paketKuri){
            $matkul = MataKuliah::where('id', '=', $paketKuri->mataKuliah_id)->first();
            $data[$index++] = [
                $paketKuri->prodi,
                (String) $paketKuri->semester,
                $matkul->namaMataKuliah,
                (String) $matkul->sks,
                (String) $matkul->jam,
            ];         
        }
        return collect($data);
    }
    public function title(): string
    {
        return 'Pengampu Kurikulum '.$this->namaKurikulum;
    }
}
<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Models\Kurikulum;

class ExportAll implements WithMultipleSheets
{
    use Exportable;

    public function sheets(): array
    {
        $sheets = [];
        $sheets[] = new ProfileDosenSheet();
        $sheets[] = new PembebananDosenSheet();
        foreach(Kurikulum::all() as $kurikulum){
            $sheets[] = new PaketKurikulumSheet($kurikulum->namaKurikulum);
            $sheets[] = new MengajarSheet($kurikulum->namaKurikulum);
        }
        return $sheets;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function dosen(){
        return User::where('id', $this->dosen_id)->first();
    }
    public function mataKuliah(){
        return MataKuliah::where('id', $this->mataKuliah_id)->first();
    }    
    public function paketKurikulum(){
        return PaketKurikulum::where('id', $this->paketKurikulum_id)->first();
    }
    public function namaKurikulum(){
        return NamaKurikulum::where('id', $this->kurikulum_id)->first();
    }
}

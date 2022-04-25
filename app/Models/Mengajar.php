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
        return dosen::where('id', $this->dosen_id)->first();
    }
    public function kelas(){
        return kelas::where('id', $this->kelas_id)->first();
    }
    public function mataKuliah(){
        return mataKuliah::where('id', $this->mataKuliah_id)->first();
    }
}

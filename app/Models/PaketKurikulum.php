<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketKurikulum extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function kurikulum(){
        return Kurikulum::where('id', $this->kurikulum_id)->first();
    }
    public function mataKuliah(){
        return MataKuliah::where('id', $this->mataKuliah_id)->first();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function kurikulum(){
        return Kurikulum::where('id', $this->kurikulum_id)->first();
    }
}

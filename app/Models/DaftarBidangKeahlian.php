<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarBidangKeahlian extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function bidangKeahlian(){
        return BidangKeahlian::where('id', $this->bidangKeahlian_id)->first();
    }
    public function dosen(){
        return User::where('id', $this->dosen_id)->first();
    }
}

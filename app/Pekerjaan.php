<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table = 'pekerjaan';
    protected $fillable = [
        'kode_status_pekerjaan', 'ket_pekerjaan'
    ];
    protected $primaryKey = "kode_status_pekerjaan";

    public $incrementing = false;
}

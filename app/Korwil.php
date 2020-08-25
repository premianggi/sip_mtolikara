<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Korwil extends Model
{
    protected $primaryKey = "id";
    protected $table = 'korwil';
    protected $fillable = [
        'nama_korwil', 'alamat','kontak_phone','email'
    ];
}

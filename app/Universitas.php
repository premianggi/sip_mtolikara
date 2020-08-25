<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universitas extends Model
{
    protected $primaryKey = "id";
    protected $table ='universitas';
    protected $fillable = [
        'nama_universitas', 'alamat_universitas', 'telepon_universitas', 'fax_universitas', 'email_universitas','link_web'
    ];
}

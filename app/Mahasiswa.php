<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='mahasiswa';
    protected $fillable = [
        'nama_mahasiswa',
        'tempat_lahir', 
        'tanggal_lahir', 
        'jenis_kelamin',
        'phone', 
        'id_universitas', 
        'id_korwil', 
        'tahun_masuk', 
        'nama_ayah', 
        'pekerjaan_ayah', 
        'nama_ibu', 
        'pekerjaan_ibu',
        'alamat', 
        'status_mahasiswa', 
        'foto_mahasiswa', 
        'foto_ktp', 
        'foto_ktm'  
    ];
    public function universitas(){
        return $this->belongsTo('App\Universitas', 'id_universitas');
    }
    public function korwil(){
        return $this->belongsTo('App\Korwil','id_korwil');
    }
    // public function pstudi(){
    //     return $this->belongsTo('App\Pstudi');
    // }
}

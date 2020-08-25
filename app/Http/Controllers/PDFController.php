<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Mahasiswa;
class PDFController extends Controller
{
    public function getPDF(){
        $mahasiswa=Mahasiswa::all();
        $pdf=PDF::loadView('admin.pdf.mahasiswa', ['mahasiswa'=>$mahasiswa]);
        return $pdf->stream('mahasiswa.pdf');
    }
}

<?php

namespace App\Exports;

use App\Mahasiswa;
use App\Universitas;
use App\Korwil;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
class MahasiswaExport implements FromCollection, WithMapping, WithHeadings 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahasiswa::all();
    }

    public function map($mahasiswa): array
    {
        return [
            $mahasiswa->nama_mahasiswa,
            $mahasiswa->tempat_lahir,
            $mahasiswa->tanggal_lahir,
            $mahasiswa->jenis_kelamin,
            $mahasiswa->phone,
        ];
    }

    // public function headings(): array
    // {
    //     return [
    //         '#',
    //         'User',
    //         'Date',
    //     ];
    // }
}

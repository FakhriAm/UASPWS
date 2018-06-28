<?php

namespace App\Http\Transformers;
use League\Fractal\TransformerAbstract;
use App\Http\Models\Mahasiswa;
class MahasiswaTransformer extends TransformerAbstract
{   
    public function transform(Mahasiswa $field){
        return [
            'nim'           => $mhs->nim, 
            'nama'          => $mhs->nama,
            'fakultas'      => $mhs->fakultas,
            'jurusan'       => $mhs->jurusan,
            'semester'      => $mhs->semester,
            'status'        => $mhs->status
        ];
    }
}
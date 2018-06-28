<?php

namespace App\Transformers;

use App\Mahasiswa;

use League\Fractal\TransformerAbstract;

class MahasiswaTransformer extends TransformerAbstract
{
    public function transform(Mahasiswa $mahasiswa)
    {
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
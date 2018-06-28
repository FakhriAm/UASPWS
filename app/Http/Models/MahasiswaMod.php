<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model{
    use SoftDeletes;

    // protected $table = 'categories';
    protected $fillable = [
        'nim','nama','fakultas','jurusan','semester','status'
    ];

    protected $guarded = ['id'];
}
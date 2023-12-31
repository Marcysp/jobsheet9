<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table ="matakuliah";

    protected $guarded = [];

    public function mahasiswa(){
        return $this->belongsToMany(Mahasiswa::class);
    }
    public function mahasiswaMatkul(){
        return $this->hasMany(Mahasiswa_MataKuliah::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_Matakuliah extends Model
{
    use HasFactory;
    protected $table ="mahasiswa_matakuliah";

    protected $guarded = [];

    public function matakuliah(){
        return $this->belongsTo(Matakuliah::class);
        }

        public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
        }
}

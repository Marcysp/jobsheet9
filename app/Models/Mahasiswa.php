<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table ="mahasiswa";
    public $timestamps=false;
    protected $primaryKey = 'Nim';
    protected $fillable = [
        'Nim',
        'Nama',
        'Kelas',
        'Jurusan',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    public function matkul(){
        return $this->belongsToMany(Matakuliah::class)
        ->withTimestamps();
    }
    public function mahasiswaMatkul(){
        return $this->hasMany(Mahasiswa_MataKuliah::class)
        ->withTimestamps();
    }
};

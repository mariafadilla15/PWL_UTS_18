<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Pegawai as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Pegawai extends Model
{
    protected $table="pegawais"; // Eloquent akan membuat model mahasiswa 
    //menyimpan record di tabel mahasiswas
    public $timestamps= false; 
    protected $primaryKey = 'nip'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'nip',
    'nama',
    'alamat',
    'jabatan',
    'gaji_pokok',
    ];

}

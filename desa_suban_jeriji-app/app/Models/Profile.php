<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';

    protected $fillable = ['nama','foto', 'nik', 'ttl', 'gender', 'nohp', 'alamat', 'ktp', 'user_id', 'tempat', 'pekerjaan', 'nikah'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ktp(){
        return $this->hasOne(Ktp::class, 'profile_id');
    }

    

    public function pengaduan(){
        return $this->hasOne(Pengaduan::class, 'profile_id');
    }

    public function surat(){
        return $this->hasMany(Surat::class, 'profile_id');
    }

    


}

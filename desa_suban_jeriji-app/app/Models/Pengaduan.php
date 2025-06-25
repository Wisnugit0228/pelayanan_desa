<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
   
    protected $table = 'pengaduan';

    protected $fillable = ['foto','judul', 'konten', 'status', 'profile_id', 'note'];


    public function profile(){
        return $this->belongsTo(Profile::class, 'profile_id');
    }
}

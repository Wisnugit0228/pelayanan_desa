<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dokumen;

class Surat extends Model
{
    use HasFactory;
    protected $table = 'surat';

    protected $fillable = ['no','nomor','jenis','status','note','nama','nik','tempat','ttl','gender','kerja','warga',
    'agama','nikah','nohp','alamat','profile_id'];

    
    public function profile(){
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    public function dokumen(){
        return $this->hasOne(Dokumen::class, 'surat_id');
    }
}

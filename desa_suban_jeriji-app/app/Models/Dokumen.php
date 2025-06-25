<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Surat;

class Dokumen extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'dokumenpelengkap';

    protected $fillable = ['foto', 'foto1', 'foto2', 'namausaha','jenisusha', 'mulaiusaha', 'alamatusaha','namaayah','namaibu','jam','surat_id','statusnikah'];

    public function surat(){
        return $this->belongsTo(Surat::class, 'surat_id');
    }
}


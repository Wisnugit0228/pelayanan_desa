<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    use HasFactory;
    protected $table = 'uploadktp';

    protected $fillable = ['ktp','status', 'profile_id', 'note'];

    public function profile(){
        return $this->belongsTo(Profile::class, 'profile_id');
    }

}

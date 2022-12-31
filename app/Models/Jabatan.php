<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ('lembaga');

    public function lembaga(){
        return $this->belongsTo(Lembaga::class);
    }

    public function anggota(){
        return $this->hasMany(Anggota::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['lembaga','jabatan'];

    public function lembaga(){
        return $this->belongsTo(Lembaga::class);
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Cviebrock\EloquentSluggable\Sluggable;

use App\Models\Jabatan;
class Lembaga extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];
    

    

    public function jabatan(){
        // return $this->hashMany(Visi::class);
        return $this->hasMany(Jabatan::class);
    }

    public function anggota(){
        return $this->hasMany(Anggota::class);
    }

    public function kegiatan(){
        return $this->hasMany(Kegiatan::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                // mengubah nama dari title
                'source' => 'singkatan'
            ]
        ];
    }
}

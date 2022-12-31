<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Cviebrock\EloquentSluggable\Sluggable;

class Kegiatan extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    protected $with = ('lembaga');

    public function lembaga(){
        return $this->belongsTo(Lembaga::class);
    }

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('textKegiatan', 'like', '%' . $search . '%');
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                // mengubah nama dari title
                'source' => 'title'
            ]
        ];
    }
}

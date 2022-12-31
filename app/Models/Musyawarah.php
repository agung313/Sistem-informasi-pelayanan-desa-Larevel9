<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Cviebrock\EloquentSluggable\Sluggable;

class Musyawarah extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('textMusyawarah', 'like', '%' . $search . '%');
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

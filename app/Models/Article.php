<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = [];
    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->author_id = auth()->id(); // Menggunakan ID pengguna yang sedang login
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'category_id',
        'status',
        'description',
        'images',
        'tags',
        'views',
    ];

    protected $casts = [
        'images' => 'array',
        'tags' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

        public function user()
    {
        return $this->belongsTo(User::class);
    }
}

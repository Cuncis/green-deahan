<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'title',
        'slug',
        'excerpt',
        'body',
        'image_path',
        'cat_label',
        'cat_color',
        'read_time',
        'tags',
        'is_featured',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    public function getFormattedDateAttribute(): string
    {
        return $this->published_at
            ? $this->published_at->translatedFormat('d M Y')
            : $this->created_at->translatedFormat('d M Y');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'title',
        'kota',
        'material',
        'description',
        'badge',
        'badge_color',
        'image_path',
        'is_tall',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_tall' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, string $category)
    {
        return $query->where('category', $category);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_slug',
        'category_description',
        'category_difficulty',
        'category_time',
        'category_color'
    ];

    public function courses()
    {
        $this->hasMany(Course::class);
    }
}
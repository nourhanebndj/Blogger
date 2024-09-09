<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'meta_title',
        'meta_content',
        'front_image',
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getImageUrl() {
        return asset('public' . \Illuminate\Support\Facades\Storage::url($this->path));
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

//    protected $table = 'products_name';
}
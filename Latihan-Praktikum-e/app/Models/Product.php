<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'price', 'stock'];

    // Relasi ke tabel categories (Kebalikan dari hasMany)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi Many-to-Many ke tabel tags (opsional, sebagai pelengkap tabel product_tag)
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = ['name', 'description'];

    // Relasi One-to-Many ke tabel products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
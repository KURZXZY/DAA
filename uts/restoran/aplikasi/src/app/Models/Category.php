<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Pastikan tabel sesuai

    protected $fillable = ['name', 'category']; // Pastikan kolom sesuai
}


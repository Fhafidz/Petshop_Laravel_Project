<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $fillable = ['title', 'description', 'stock', 'price', 'image'];

    // Method untuk menyimpan gambar sebagai base64 encoded string
    public function setImageAttribute($value)
    {
        $this->attributes['image'] = $value ? base64_encode($value) : null;
    }

    // Method untuk mengambil gambar sebagai base64 decoded string
    public function getImageAttribute($value)
    {
        return $value ? base64_decode($value) : null;
    }
}

<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    protected $guarded = ['id'];

    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
}

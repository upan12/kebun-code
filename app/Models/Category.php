<?php

namespace App\Models;

use App\Models\Creation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function creation()
    {
        return $this->hasMany(Creation::class);
    }
}

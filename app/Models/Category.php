<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    protected $fillable = ['name'];

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
    
    use HasFactory;
}

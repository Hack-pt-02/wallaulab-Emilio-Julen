<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;

class Ad extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['title', 'body', 'price'];

    static public function ToBeRevisionedCount()
    {
        return Ad::where('is_accepted', null)->count();
    }

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }


    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'item_category', 'item_id', 'category_id');
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }

    public function favorite()
    {
        return $this->hasMany(Favorite::class);
    }

    public function buy()
    {
        return $this->hasMany(Buy::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeItemSearch($query, $name)
    {
        if ($name != 'null') {
            $query->where('name', 'like', '%' . $name . '%');
        }
    }
}

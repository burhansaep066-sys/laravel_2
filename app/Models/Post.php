<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excertpt','body'];
    // protected $guarded untuk membuka selain dari yang di jadikan parameter bisa dirubah.
    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    // cara 1
    // public function scopeFilter($query) 
    // {
    //     if (request('seacrh')) 
    //     {
    //         return $query->where('title', 'like', '%' . request('seacrh') . '%')
    //                 ->orWhere('body', 'like', '%' . request('seacrh') . '%');

    //     }
    // }
    // end cara 1

    // cara 2
    // public function scopeFilter($query, array $filters) 
    // {
    //     if (isset($filters['seacrh']) ? $filters['seacrh'] : false) 
    //     {
    //         return $query->where('title', 'like', '%' . $filters['seacrh'] . '%')
    //                 ->orWhere('body', 'like', '%' . $filters['seacrh'] . '%');

    //     }
    // }
    // end cara 2

    // cara 3
    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters['seacrh'] ?? False, function($query, $seacrh)
        {
            return $query->where('title', 'like', '%' . $seacrh . '%')
                    ->orWhere('body', 'like', '%' . $seacrh . '%');
 
        });

        $query->when($filters['category'] ?? False, function($query, $category)
        {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }
    // end cara 3

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}





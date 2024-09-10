<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'group',
        'category_name',
        'slug',
        'lang'
    ];

    public function blogs()
    {
        return $this->hasMany(Blogs::class, 'cat_id', 'id');
    }
}

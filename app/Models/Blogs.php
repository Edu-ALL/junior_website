<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'slug',
        'blog_title',
        'blog_summary',
        'blog_description',
        'blog_thumbnail',
        'blog_thumbnail_alt',
        'blog_status',
        'seo_title',
        'seo_keyword',
        'seo_desc',
        'lang',
        'click_count',
        'duration_read',
        'is_highlight',
        'publish_date'
    ];

    public function category()
    {
        return $this->belongsTo(BlogCategories::class, 'cat_id', 'id');
    }

    public function reads()
    {
        return $this->hasMany(BlogReads::class, 'blog_id', 'id');
    }

}

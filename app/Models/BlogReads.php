<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogReads extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'ip_address',
    ];

    public function blog()
    {
        return $this->belongsTo(Blogs::class, 'blog_id', 'id');
    }
}

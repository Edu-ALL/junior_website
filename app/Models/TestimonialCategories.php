<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'route',
        'shown',
    ];

    public function testimonial()
    {
        return $this->hasMany(Testimonial::class, 'testi_category', 'id');
    }
}

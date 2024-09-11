<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'group',
        'testi_name',
        'testi_desc',
        'testi_subtitle',
        'testi_thumbnail',
        'testi_alt',
        'testi_status',
        'lang'
    ];
}

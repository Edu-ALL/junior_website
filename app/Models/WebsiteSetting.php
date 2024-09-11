<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_name',
        'website_primary_logo',
        'alt_primary_logo',
        'phone_number_wa',
        'phone_number_1',
        'phone_number_2',
        'phone_number_3',
        'address',
        'email',
        'facebook',
        'instagram',
        'youtube_channel'
    ];
}

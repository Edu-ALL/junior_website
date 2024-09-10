<?php

namespace App\Http\Trait;

trait WebsiteSettingTrait
{
    public function website_data()
    {
        return [
            'website_name' => 'EduALL Junior',
            'website_primary_logo' => asset('img/logo/EduALL.png'),
            'alt_primary_logo' => 'EduALL Junior',
            'website_secondary_logo' => asset('img/logo/EduALL.png'),
            'alt_secondary_logo' => 'EduALL Junior',
            'phone_number_wa' => '81911645771',
            'phone_number_1' => '81911645771',
            'phone_number_2' => '81911645771',
            'phone_number_3' => '81911645771',
            'address' => '<p>Sentra Niaga Puri Indah, Jl. Puri Indah Raya Lingkar Blok T 2 No.19-20, RT.LuarRT.1/RW.2, Kembangan Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610</p>',
            'email' => 'info@junior.edu-all.com',
            'linkedin' => null,
            'instagram' => null,
            'youtube_channel' => null
        ];
    }
}
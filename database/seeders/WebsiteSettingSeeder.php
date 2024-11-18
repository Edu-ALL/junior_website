<?php

namespace Database\Seeders;

use App\Models\WebsiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class WebsiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = [
            'website_name' => 'EduALL Junior',
            'website_primary_logo' => 'EduALL.webp',
            'alt_primary_logo' => 'EduALL Junior',
            'phone_number_wa' => '81911645771',
            'phone_number_1' => '81911645771',
            'phone_number_2' => '81911645771',
            'phone_number_3' => '81911645771',
            'address' => '<p>Sentra Niaga Puri Indah, Jl. Puri Indah Raya Lingkar Blok T 2 No.19-20, RT.LuarRT.1/RW.2, Kembangan Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610</p>',
            'email' => 'info@junior.edu-all.com',
            'facebook' => '#',
            'instagram' => 'https://www.instagram.com/eduall.junior/',
            'youtube_channel' => '#',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        WebsiteSetting::create($seed);
    }
}

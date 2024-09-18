<?php

namespace Database\Seeders;

use App\Models\TestimonialCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TestiCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeds = [
            [
                'name' => 'General',
                'route' => '#',
                'shown' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Science',
                'route' => 'programs/science',
                'shown' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Creative Communications',
                'route' => 'programs/creative-communication',
                'shown' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Entrepreneurship',
                'route' => 'programs/entrepreneurship',
                'shown' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Creative Coding & Robotics',
                'route' => 'programs/coding-robotics',
                'shown' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Visual Arts',
                'route' => 'programs/visual-arts',
                'shown' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        TestimonialCategories::insert($seeds);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Bootcamp;
use Illuminate\Database\Seeder;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bootcamps = [
            [
                'title' => 'Full Stack Web Development',
                'image' => 'bootcamp-images/bootcamp-1.jpg',
                'description' => 'Learn to be a Full Stack Web Developer from basic to expert for 4 months.'
            ],
            [
                'title' => 'UI/UX Design',
                'image' => 'bootcamp-images/bootcamp-2.jpg',
                'description' => 'Learn to be a UI/UX Designer from basic to expert for 4 months.'
            ],
            [
                'title' => 'Data Science',
                'image' => 'bootcamp-images/bootcamp-3.jpg',
                'description' => 'Learn to be a Data Scientist from basic to expert for 4 months.'
            ],
        ];

        foreach ($bootcamps as $bootcamp) {
            Bootcamp::create($bootcamp);
        }
    }
}

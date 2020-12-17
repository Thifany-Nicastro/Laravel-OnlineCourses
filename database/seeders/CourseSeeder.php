<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\User;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'name' => 'Laravel Complete',
                'description' => '...',
                'price' => '70.00'
            ],
            [
                'name' => 'NodeJS Basic',
                'description' => '...',
                'price' => '50.00'
            ],
            [
                'name' => 'React Native Advanced',
                'description' => '...',
                'price' => '130.00'
            ],
            [
                'name' => 'JS Bootcamp',
                'description' => '...',
                'price' => '2000.00'
            ],
            [
                'name' => 'Angular for beginners',
                'description' => '...',
                'price' => '2000.00'
            ],
        ];

        foreach ($courses as $course) {
            User::instructor()->inRandomOrder()->first()->courses()->create($course);
        }
    }
}

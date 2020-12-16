<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'Laravel Complete',
            'description' => '...',
            'price' => '70.00'
        ]);
        Course::create([
            'name' => 'NodeJS Basic',
            'description' => '...',
            'price' => '50.00'
        ]);
        Course::create([
            'name' => 'React Native Advanced',
            'description' => '...',
            'price' => '130.00'
        ]);
        Course::create([
            'name' => 'JS Bootcamp',
            'description' => '...',
            'price' => '2000.00'
        ]);
        Course::create([
            'name' => 'Angular for beginners',
            'description' => '...',
            'price' => '2000.00'
        ]);
    }
}

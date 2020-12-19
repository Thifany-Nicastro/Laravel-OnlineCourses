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
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur rutrum lectus, ut euismod dolor rhoncus id. Maecenas commodo eu magna laoreet rhoncus.',
                'price' => '70.00'
            ],
            [
                'name' => 'NodeJS Basic',
                'description' => 'Quisque tristique mi eu nunc faucibus interdum. Maecenas mattis risus nibh, sed efficitur erat pulvinar at.',
                'price' => '50.00'
            ],
            [
                'name' => 'React Native Advanced',
                'description' => 'Suspendisse eget est vitae sapien accumsan lacinia ac sit amet felis. Aenean pellentesque dolor dolor, nec consequat sapien pulvinar at.',
                'price' => '130.00'
            ],
            [
                'name' => 'JS Bootcamp',
                'description' => 'Proin aliquet ipsum sit amet urna scelerisque, id dignissim sapien viverra. Suspendisse pharetra tortor eu luctus sollicitudin.',
                'price' => '2000.00'
            ],
            [
                'name' => 'Angular for beginners',
                'description' => 'Nunc ullamcorper libero urna, vel accumsan sapien finibus eu. Aliquam auctor id velit rutrum commodo. Mauris malesuada condimentum vehicula.',
                'price' => '2000.00'
            ],
        ];

        foreach ($courses as $course) {
            User::instructor()->inRandomOrder()->first()->courses()->create($course);
        }
    }
}

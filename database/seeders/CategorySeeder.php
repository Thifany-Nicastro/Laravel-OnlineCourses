<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Web',
            'Back-end',
            'Front-end',
            'PHP',
            'JS',
            'Database',
            'MySQL',
            'React',
            'Vue',
        ];
      
        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}

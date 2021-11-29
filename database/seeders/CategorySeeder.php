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
        Category::create([
            'category' => 'Fiction'
        ]);
        Category::create([
            'category' => 'Science'
        ]);
        Category::create([
            'category' => 'Computer'
        ]);
    }
}

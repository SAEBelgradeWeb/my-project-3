<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['title' => 'Sport']);
        Category::create(['title' => 'Politics']);
        Category::create(['title' => 'World']);
        Category::create(['title' => 'Travel']);
    }
}

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
        $data = [
            ["name" => "Category 1", "title" => "Category 1", "icon" => "fas fa-plus"],
            ["name" => "Category 2", "title" => "Category 2", "icon" => "fas fa-plus"],
        ];

        $pages = [
            [1,2],
            3
        ];

        foreach($data as $key => $category) {
            $categ = Category::create($category);
            $categ->pages()->attach($pages[$key]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["name" => "Page 1", "title" => "Page 1"],
            ["name" => "Page 2", "title" => "Page 2"],
            ["name" => "Page 3", "title" => "Page 3"],
        ];

        $sections = [
            [
                1 => ['sequence' => 2],
                2 => ['sequence' => 1]
            ],
            [3 => ['sequence' => 1]],
            [4 => ['sequence' => 1]]
        ];

        foreach($data as $key => $page) {
            $pag = Page::create($page);
            $pag->sections()->attach($sections[$key]);
        }
    }
}

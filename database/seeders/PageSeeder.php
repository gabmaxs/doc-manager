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
            [1,2],
            3,
            4
        ];

        foreach($data as $key => $page) {
            $pag = Page::create($page);
            $pag->sections()->attach($sections[$key]);
        }
    }
}

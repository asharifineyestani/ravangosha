<?php

namespace Afranext\Crud\database\seeds;


use Afranext\Crud\app\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items = [
            [
                "icon" => "fa-tasks",
                "name" => "users",
                "href" => "users",
                "permission" => "users-read",
            ],
            [
                "icon" => "fa-tasks",
                "name" => "languages",
                "href" => "languages",
                "permission" => "language-read",
            ],
            [
                "icon" => "fa-tasks",
                "name" => "menu",
                "href" => "menu",
                "permission" => "menu-read",
            ],
            [
                "icon" => "fa-tasks",
                "name" => "variables",
                "href" => "variables",
                "permission" => "variable-read",
            ],

        ];


        foreach ($items as $item)
            Menu::create($item);


    }
}

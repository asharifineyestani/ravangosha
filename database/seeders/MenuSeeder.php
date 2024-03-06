<?php

namespace Database\Seeders;


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

            [
                "icon" => "fa-tasks",
                "name" => "books",
                "href" => "books",
                "permission" => "books-read",
            ],

            [
                "icon" => "fa-tasks",
                "name" => "categories",
                "href" => "categories",
                "permission" => "categories-read",
            ],

            [
                "icon" => "fa-tasks",
                "name" => "comments",
                "href" => "comments",
                "permission" => "comments-read",
            ],


            [
                "icon" => "fa-tasks",
                "name" => "sellers",
                "href" => "sellers",
                "permission" => "sellers-read",
            ],

            [
                "icon" => "fa-tasks",
                "name" => "tags",
                "href" => "tags",
                "permission" => "tags-read",
            ],

            [
                "icon" => "fa-tasks",
                "name" => "verify_codes",
                "href" => "verify_codes",
                "permission" => "verify_codes-read",
            ],

        ];





        foreach ($items as $item)
            Menu::create($item);


    }
}

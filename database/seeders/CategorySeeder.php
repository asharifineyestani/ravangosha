<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // حذف داده‌های موجود در جدول قبل از افزودن داده‌های جدید
        DB::table('categories')->truncate();

        // افزودن داده‌های پیشفرض
        $categories = [
            ['slug' => 'self-development', 'title' => 'توسعه فردی'],
            ['slug' => 'academic', 'title' => 'تخصصی'],
            ['slug' => 'relationships', 'title' => 'روابط و عشق'],
            ['slug' => 'mental-health', 'title' => 'سلامت روان'],
            ['slug' => 'parenting', 'title' => 'فرزند آوری'],
            ['slug' => 'business', 'title' => 'کسب و کار'],
            // ...
        ];

        // افزودن داده‌ها به جدول
        DB::table('categories')->insert($categories);
    }
}

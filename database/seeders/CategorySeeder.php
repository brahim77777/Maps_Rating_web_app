<?php

namespace Database\Seeders;

use App\Models\Category;
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
        DB::table('categories')->truncate();

        Category::create([
           'title' => "فنادق",
            'slug' => "فنادق",
        ]);

        Category::create([
            'title' => "مطاعم",
             'slug' => "مطاعم",
         ]);

         Category::create([
            'title' => "تسوق",
             'slug' => "تسوق",
         ]);

         Category::create([
            'title' => "مدارس وجامعات",
             'slug' => "مدارس-جامعات",
         ]);

         Category::create([
            'title' => "مستشفيات",
             'slug' => "مستشفيات",
         ]);

         Category::create([
            'title' => "صيدليات",
             'slug' => "صيدليات",
         ]);    
        }
    }


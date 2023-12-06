<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::factory(100)->create();

        $categories->each(function ($user) {
            $user->update([
                'category_id' => Category::whereNull('category_id')
                    ->inRandomOrder()->first()->id,
            ]);
        });
    }
}

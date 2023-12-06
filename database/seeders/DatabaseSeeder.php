<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        $this->call(CategoriesSeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(LaratrustSeeder::class);

        if(User::count() < 1){
            $user = \App\Models\User::factory()->create([
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'superdev.cloud@gmail.com',
                'password' => bcrypt('Superdev...')
            ]);

            $user->addRole('superadmin');
        }



    }
}

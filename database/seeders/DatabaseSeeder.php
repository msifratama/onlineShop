<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('products')->insert([
            [
                'product_code' => 'P001',
                'name' => 'Tas',
                'description' => '-',
                'price' => 200000,
                'qty' => 50,
            ],
            [
                'product_code' => 'P002',
                'name' => 'Sepatu',
                'description' => '-',
                'price' => 400000,
                'qty' => 100,
            ]
        ]);
    }
}

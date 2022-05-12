<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \App\Models\Product::create([
        'name' => 'Orange',
        'amount' => 20,
        'user_id' => 1
    ]);

        \App\Models\Product::create([
            'name' => 'Apple',
            'amount' => 50,
            'user_id' => 2
        ]);

        \App\Models\Product::create([
            'name' => 'Mango',
            'amount' => 35,
            'user_id' => 3
        ]);

    }
}

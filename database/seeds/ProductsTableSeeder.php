<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Special Products',
        ]);
        DB::table('products')->insert([
            'name' => 'Mortar Ready to use',
        ]);
        DB::table('products')->insert([
            'name' => 'Self-Compacting Concrete',
        ]);
        DB::table('products')->insert([
            'name' => 'Early Strength Concrete',
        ]);
        DB::table('products')->insert([
            'name' => 'Steel Fibers Concrete',
        ]);
    }
}

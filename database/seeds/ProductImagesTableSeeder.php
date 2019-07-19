<?php

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            'img' => 'Special-Products.png',
            'product_id' => 1,
        ]);
        DB::table('product_images')->insert([
            'img' => 'Mortar-Ready-to-use.png',
            'product_id' => 2,
        ]);
        DB::table('product_images')->insert([
            'img' => 'Self-Compacting-Concrete.png',
            'product_id' => 3,
        ]);
        DB::table('product_images')->insert([
            'img' => 'Early-Strength-Concrete.png',
            'product_id' => 4,
        ]);
        DB::table('product_images')->insert([
            'img' => 'Steel-Fibers-Concrete.png',
            'product_id' => 5,
        ]);
    }
}

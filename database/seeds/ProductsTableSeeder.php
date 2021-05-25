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
        factory(\App\Product::class, 50)->create();

        (new \App\ActualProduct())->fill(['product_id' => 3])->save();
        (new \App\ActualProduct())->fill(['product_id' => 6])->save();
        (new \App\ActualProduct())->fill(['product_id' => 17])->save();
    }
}

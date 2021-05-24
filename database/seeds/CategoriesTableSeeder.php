<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new \App\Category())->fill(['name' => 'Бытовая техника'])->save();
        (new \App\Category())->fill(['name' => 'Смартфоны и гаджеты'])->save();
        (new \App\Category())->fill(['name' => 'Компьютеры'])->save();
        (new \App\Category())->fill(['name' => 'Офис и сеть'])->save();
        (new \App\Category())->fill(['name' => 'Отдых и развлечения'])->save();
        (new \App\Category())->fill(['name' => 'Аксессуары'])->save();
        (new \App\Category())->fill(['name' => 'ТВ и мультимедиа'])->save();
    }
}

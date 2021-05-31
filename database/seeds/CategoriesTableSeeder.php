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
        (new \App\Category())->fill(['name' => 'Бытовая техника', 'img' => 'images/icons/all.png'])->save();
        (new \App\Category())->fill(['name' => 'Смартфоны и гаджеты', 'img' => 'images/icons/phone.png'])->save();
        (new \App\Category())->fill(['name' => 'Компьютеры', 'img' => 'images/icons/computer.png'])->save();
        (new \App\Category())->fill(['name' => 'Офис и сеть', 'img' => 'images/icons/printer.png'])->save();
        (new \App\Category())->fill(['name' => 'Отдых и развлечения', 'img' => 'images/icons/chaise.png'])->save();
        (new \App\Category())->fill(['name' => 'Аксессуары', 'img' => 'images/icons/wire.png'])->save();
        (new \App\Category())->fill(['name' => 'ТВ и мультимедиа', 'img' => 'images/icons/tv.png'])->save();
    }
}

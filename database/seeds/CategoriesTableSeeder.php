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
        DB::table('categories')->insert(['name' => 'woman']);
        DB::table('categories')->insert(['name' => 'men']);
        DB::table('categories')->insert(['name' => 'sale']);
        DB::table('categories')->insert(['name' => 'accessories']);
        DB::table('categories')->insert(['name' => 'vip']);
    }
}

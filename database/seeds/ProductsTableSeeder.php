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
        DB::table('products')->insert(['name' => 'Product One', 'price' => 14.02, 'category_id' => 1, 'picture_url' => 'http://bit.ly/2IB4TLA']);
        DB::table('products')->insert(['name' => 'Product Two', 'price' => 6.05, 'category_id' => 1, 'picture_url' => 'http://bit.ly/2FLfJkc']);

        DB::table('products')->insert(['name' => 'Product Three', 'price' => 9.89, 'category_id' => 2, 'picture_url' => 'http://bit.ly/2pmwyXH']);
        DB::table('products')->insert(['name' => 'Product Four', 'price' => 4.57, 'category_id' => 2, 'picture_url' => 'http://bit.ly/2FTaJ96']);
        DB::table('products')->insert(['name' => 'Product Five', 'price' => 24.30, 'category_id' => 2, 'picture_url' => 'http://bit.ly/2G3pcCN']);

        DB::table('products')->insert(['name' => 'Product Six', 'price' => 65.45, 'category_id' => 3, 'picture_url' => 'http://bit.ly/2HI8TbF']);
        DB::table('products')->insert(['name' => 'Product Seven', 'price' => 45.56, 'category_id' => 3, 'picture_url' => 'https://bit.ly/2FpNpPf']);
        DB::table('products')->insert(['name' => 'Product Eight', 'price' => 87.65, 'category_id' => 3, 'picture_url' => 'https://bit.ly/2I2ASqv']);
        DB::table('products')->insert(['name' => 'Product Nine', 'price' => 23.45, 'category_id' => 3, 'picture_url' => 'https://nym.ag/2r8EL3A']);
        DB::table('products')->insert(['name' => 'Product Ten', 'price' => 56.43, 'category_id' => 3, 'picture_url' => 'https://bit.ly/2r8Oirn']);

        DB::table('products')->insert(['name' => 'Product Eleven', 'price' => 9.56, 'category_id' => 4, 'picture_url' => 'https://bit.ly/2r4v06r']);
        DB::table('products')->insert(['name' => 'Product Twelve', 'price' => 4.56, 'category_id' => 4, 'picture_url' => 'https://bit.ly/2HYReR2']);
        DB::table('products')->insert(['name' => 'Product Thirteen', 'price' => 34.32, 'category_id' => 4, 'picture_url' => 'https://bit.ly/2HzTeQ4']);

        DB::table('products')->insert(['name' => 'Product Fourteen', 'price' => 12.09, 'category_id' => 5, 'picture_url' => 'https://bit.ly/2HzZDe4']);
        DB::table('products')->insert(['name' => 'Product Fifteen', 'price' => 14.02, 'category_id' => 5, 'picture_url' => 'https://usm.ag/2HZ5wRI']);
    }
}

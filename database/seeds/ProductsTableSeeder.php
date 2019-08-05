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
            'name'=> 'Choclate Chip Cookies',
            'product_image' => '1563975520.jpg',
            'price' => '34.00',
            'discountedPrice' => '64.05',
            'product_description' => 'Indulge ultra couverture dipping & enrobing choclate - milk.',
            'category_id'=> 1,
        ]);
        DB::table('products')->insert([
            'name'=> 'Choclate Brownie',
            'product_image' => '1563975520.jpg',
            'price' => '34.00',
            'discountedPrice' => '64.05',
            'product_description' => 'Indulge ultra couverture dipping & enrobing choclate - milk.',
            'category_id'=> 1,
        ]);
        DB::table('products')->insert([
            'name'=> 'Kitkat',
            'product_image' => '1563975520.jpg',
            'price' => '34.00',
            'discountedPrice' => '64.05',
            'product_description' => 'Indulge ultra couverture dipping & enrobing choclate - milk.',
            'category_id'=> 1,
        ]);
        DB::table('products')->insert([
            'name'=> 'Twix',
            'product_image' => '1563975520.jpg',
            'price' => '34.00',
            'discountedPrice' => '64.05',
            'product_description' => 'Indulge ultra couverture dipping & enrobing choclate - milk.',
            'category_id'=> 1,
        ]);
        DB::table('products')->insert([
            'name'=> 'Fudge Brownie Ice Cream',
            'product_image' => '1563975520.jpg',
            'price' => '34.00',
            'discountedPrice' => '64.05',
            'product_description' => 'Indulge ultra couverture dipping & enrobing choclate - milk.',
            'category_id'=> 1,
        ]);
        DB::table('products')->insert([
            'name'=> 'Hershey Bar',
            'product_image' => '1563975520.jpg',
            'price' => '34.00',
            'discountedPrice' => '64.05',
            'product_description' => 'Indulge ultra couverture dipping & enrobing choclate - milk.',
            'category_id'=> 2,
        ]);
        DB::table('products')->insert([
            'name'=> 'Choclate Fondue',
            'product_image' => '1563975520.jpg',
            'price' => '34.00',
            'discountedPrice' => '64.05',
            'product_description' => 'Indulge ultra couverture dipping & enrobing choclate - milk.',
            'category_id'=> 2,
        ]);
        DB::table('products')->insert([
            'name'=> 'Oreo Cookies Cake',
            'product_image' => '1563975520.jpg',
            'price' => '34.00',
            'discountedPrice' => '64.05',
            'product_description' => 'Indulge ultra couverture dipping & enrobing choclate - milk.',
            'category_id'=> 2,
        ]);
        DB::table('products')->insert([
            'name'=> 'Nestle Crunch',
            'product_image' => '1563975520.jpg',
            'price' => '34.00',
            'discountedPrice' => '64.05',
            'product_description' => 'Indulge ultra couverture dipping & enrobing choclate - milk.',
            'category_id'=> 2,
        ]);
        DB::table('products')->insert([
            'name'=> 'Nutella',
            'product_image' => '1563975520.jpg',
            'price' => '34.00',
            'discountedPrice' => '64.05',
            'product_description' => 'Indulge ultra couverture dipping & enrobing choclate - milk.',
            'category_id'=> 2,
        ]);
    }
}

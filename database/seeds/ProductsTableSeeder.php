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
       'productname' => 'Lava',
       'user_id' => '1',
       'model' => 'Lava A3',
       'image' =>'/image/m4.jpeg',
        'quantity' => '3',
        'price' =>'12000',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      ]);
    }
}

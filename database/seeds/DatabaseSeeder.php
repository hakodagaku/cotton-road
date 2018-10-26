<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CreateUsersSeeder::class);
         $this->call(CreateProductsSeeder::class);
         $this->call(CreateStocksSeeder::class);
         $this->call(CreateReceivingSeeder::class);
         $this->call(CreateShipmentsSeeder::class);
         $this->call(CreateSalesSeeder::class);
         $this->call(CreateSaleDetailsSeeder::class);
         $this->call(CreatePrepaidSeeder::class);
    }
}

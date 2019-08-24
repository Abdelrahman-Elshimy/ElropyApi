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
      factory(\App\User::class, 50)->create();
      factory(\App\Product::class, 50)->create();
      factory(\App\Dept::class, 10)->create();
      factory(\App\DeptOperation::class, 100)->create();
      factory(\App\Bill::class, 5)->create();
      factory(\App\Operation::class, 500)->create();
    }
}

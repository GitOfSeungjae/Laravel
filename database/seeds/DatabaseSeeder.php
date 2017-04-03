<?php

use Illuminate\Database\Seeder;
use Database\Seeds\MenuHederSeeder;
use Database\Seeds\MenuItemSeeder;
use Database\Seeds\InventoryCarSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call('MenuHederSeeder');
         $this->call('MenuItemSeeder');
         $this->call('InventoryCarSeeder');
    }
}

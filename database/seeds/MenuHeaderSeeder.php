<?php

use Illuminate\Database\Seeder;

class MenuHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menuHeaders = ['codebrick'];

        foreach($menuHeaders as $header)
        {
        		DB::table('menu_headers')->insert([
        				'menu_desc' => $header,
        				'isvalid' => true,
        				'created_at' => \Carbon\Carbon::now(),
        				'updated_at' => \Carbon\Carbon::now()
        			]);

        }
    }
}

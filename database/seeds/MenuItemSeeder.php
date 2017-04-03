<?php

use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menuItems = [['desc' => 'Inventory', 'title' => 'Inventory List', 'url' => 'inventory'],
                        ['desc' => 'Commission', 'title' => 'Commission', 'url' => 'commission'],
                        ['desc' => 'Manage Market', 'title' => 'Manage Market', 'url' => 'market'],
                        ['desc' => 'Manage Customer', 'title' => 'Manage Customer', 'url' => 'customer'],
                        ['desc' => 'Report Setting', 'title' => 'Report Setting', 'url' => 'report'],
                        ['desc' => 'Sign Out', 'title' => 'Sign Out', 'url' => 'signout']];
        $headers = DB::select('select * from menu_headers where menu_desc = ?', ['codebrick']);
        $orderBy = 0;
        $headerId = 0;

        foreach($headers as $header)
        {
	        	$headerId = $header->id;
	        	break;
        }

        foreach($menuItems as $item)
        {
        		$orderBy++;
        		DB::table('menu_items')->insert([
       				'menu_id' => $headerId,
        				'menu_item_desc' => $item['desc'],
                       'menu_item_title' => $item['title'],
                       'menu_item_url' => $item['url'],
        				'orderBy' => $orderBy,
        				'created_at' => \Carbon\Carbon::now(),
        				'updated_at' => \Carbon\Carbon::now()
        			]);

        }
    }
}

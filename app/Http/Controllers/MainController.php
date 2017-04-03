<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\MenuItem;
use App\InventoryCar;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index($menuitem)
    {
    		if($menuitem != 'inventory') {
    			return view('welcome');
    		}

    		$menuItem = MenuItem::where('menu_item_url',$menuitem) -> first();

    		$invCars = InventoryCar::all();

        return view('codebrick.main_codebrick',['carlists'=> $invCars->toArray()]);

    }
    	public function filtering(Request $request)
    {
    		$filtered = false;
    		if($request->ft_id||$request->ft_vinNo||$request->ft_vinNo||
    			$request->ft_make||$request->ft_year||$request->ft_mspr||
    			$request->ft_status||$request->ft_booked||$request->ft_listed){
    			$filtered = true;
    		}

    		$invCars;

    		if($filtered){
    			$invCars = InventoryCar::all();
    			$invCars = InventoryCar::ilter_id($query, $request->ft_id);
    		}else {
    			$invCars = InventoryCar::all();
    		}

    		$html = "<h1>aaaa</h1>";
    	return $html;
    }
}

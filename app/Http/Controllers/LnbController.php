<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\MenuHeader;
use App\MenuItem;

class LnbController extends Controller
{
	public function list($menuhead)
    {

    		$lnbMenuHead = MenuHeader::where('menu_desc', $menuhead) -> first();
    		$lnbMenus = MenuItem::where('menu_id',$lnbMenuHead->id)
    		                       ->orderBy('orderby')
    		                       ->get();            

        return view('codebrick.lnb_codebrick',['menulists'=> $lnbMenus->toArray()]);

    }
}

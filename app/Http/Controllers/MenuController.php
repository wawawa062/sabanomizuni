<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(Menu $menu)
    {
        return view('menus.index')->with(['menus' =>$menu->getPaginateBylimit()]);
    }
    
    public function show(Menu $menu)
    {
        return view('menus.show')->with(['menu' => $menu]);
    }
}

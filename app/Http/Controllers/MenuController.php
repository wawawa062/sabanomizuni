<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
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
    
    public function create()
    {
        return view('menus.create');
    }
    
    public funtion store(MenuRequest $request, Menu $menu)
    {
        $input = $request['menu'];
        $menu->fill($input)->save();
        return redirect('/menus/' , $menu->id);
    }
    
    public function delete(Menu $menu)
    {
        $menu->delete();
        return redirect('/');
    }
}

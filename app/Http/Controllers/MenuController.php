<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(Menu $menu)
    {
        return view('menus.index')->with(['menus' =>$menu->getPaginateByLimit()]);
    }
    
    public function show(Menu $menu)
    {
        return view('menus.show')->with(['menu' => $menu]);
    }
    
    public function create()
    {
        return view('menus.create');
    }
    
    public function store(MenuRequest $request, Menu $menu)
    {
        $input = $request['menu'];
        $menu->fill($input)->save();
        return redirect('/menus/' . $menu->id);
    }
    
    public function delete(Menu $menu)
    {
        $menu->delete();
        return redirect('/');
    }
    
    public function edit(Menu $menu)
    {
    return view('menus.edit')->with(['menu' => $menu]);
    }
    
    public function update(MenuRequest $request, Menu $menu)
    {
        $input_menu = $request['menu'];
        $menu->fill($input_menu)->save();
        
        return redirect('/menus/' . $menu->id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'index',
            [
                'listMenu' => Menu::index()
            ]
        );
    }
    public function indexMenu()
    {
        $menu = Menu::index();
        if (request()->has('kat')) {
            if (request()->input('kat', 'Cookies') === 'Cookies') {
                $menu = Menu::index()->where('kategori', "Cookies");
            } else if (request()->input('kat', 'Cake') === 'Cake'){
                $menu = Menu::index()->where('kategori', "Cake");
            }else if(request()->input('kat', 'Kue Tradisional') === 'Kue Tradisional'){
                $menu = Menu::index()->where('kategori',"Kue Tradisional");
            }
            else {
                $menu = Menu::index();
            }
        }
        return view(
            'menu',
            [
                'listMenu' => $menu
            ]
        );
    }
    public function indexDetail($id)
    {
        return view(
            'detail',
            [
                'detailMenu' => Menu::detailMenu($id),
                'listMenu' => Menu::index()
            ]
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuRequest  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}

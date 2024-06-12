<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $list = Menu::where('status', '!=', 0)->orderBy('created_at', 'desc')->get();

        return view('backend.menu.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = Menu::where('status', '!=', 0)->orderBy('created_at', 'desc')->get();
        $htmlparentid = '';
        $htmlsortorder = '';
        foreach ($list as $item) {
            $htmlparentid .= "<option value='".$item->parent_id."'>".$item->parent_id.'</option>';
            $htmlsortorder .= "<option value='".$item->sort_order."'>".$item->sort_order.'</option>';

        }

        return view('backend.menu.create', compact('list', 'htmlparentid', 'htmlsortorder'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->parent_id = $request->parent_id;
        $menu->sort_order = $request->sort_order;
        $menu->link = $request->link;
        $menu->type = $request->type;
        $menu->position = $request->position;
        $menu->created_at = date('Y-m-d H:i:s');
        $menu->created_by = Auth::id() ?? 1;
        $menu->status = $request->status;
        $menu->save();

        return redirect()->route('admin.menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function status(string $id)
    {
        //
    }
}

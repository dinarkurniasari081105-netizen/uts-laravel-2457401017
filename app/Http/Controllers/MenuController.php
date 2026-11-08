<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'category'     => 'required|in:Makanan Utama,Makanan Ringan,Minuman',
            'code'         => 'required|string|unique:menus,code',
            'price'        => 'required|numeric|min:0',
            'description'  => 'nullable|string',
        ]);

        $validated['is_available'] = $request->has('is_available') ? true : false;

        Menu::create($validated);

        return redirect()->route('menus.index')->with('success', 'Menu hidangan baru berhasil ditambahkan!');
    }

    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menus.show', compact('menu'));
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'category'     => 'required|in:Makanan Utama,Makanan Ringan,Minuman',
            'code'         => 'required|string|unique:menus,code,' . $id,
            'price'        => 'required|numeric|min:0',
            'description'  => 'nullable|string',
        ]);

        $validated['is_available'] = $request->has('is_available') ? true : false;

        $menu->update($validated);

        return redirect()->route('menus.index')->with('with', 'Data menu hidangan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menus.index')->with('success', 'Menu hidangan berhasil dihapus!');
    }
}


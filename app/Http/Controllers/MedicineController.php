<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::all();
        return view('medicines.index', compact('medicines'));
    }

    public function create()
    {
        return view('medicines.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'                     => 'required|string|max:255',
            'category'                 => 'required|in:Obat Bebas,Obat Bebas Terbatas,Obat Keras',
            'code'                     => 'required|string|unique:medicines,code',
            'expired_at'               => 'required|date',
            'price'                    => 'required|numeric|min:0',
            'stock'                    => 'required|integer|min:0',
            'description'              => 'nullable|string',
        ]);

        $validated['is_prescription_required'] = $request->has('is_prescription_required') ? true : false;

        Medicine::create($validated);

        return redirect()->route('medicines.index')->with('success', 'Data obat baru berhasil ditambahkan!');
    }

    public function show($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('medicines.show', compact('medicine'));
    }

    public function edit($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('medicines.edit', compact('medicine'));
    }

    public function update(Request $request, $id)
    {
        $medicine = Medicine::findOrFail($id);

        $validated = $request->validate([
            'name'                     => 'required|string|max:255',
            'category'                 => 'required|in:Obat Bebas,Obat Bebas Terbatas,Obat Keras',
            'code'                     => 'required|string|unique:medicines,code,' . $id,
            'expired_at'               => 'required|date',
            'price'                    => 'required|numeric|min:0',
            'stock'                    => 'required|integer|min:0',
            'description'              => 'nullable|string',
        ]);

        $validated['is_prescription_required'] = $request->has('is_prescription_required') ? true : false;

        $medicine->update($validated);

        return redirect()->route('medicines.index')->with('success', 'Data obat berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $medicine = Medicine::findOrFail($id);
        $medicine->delete();

        return redirect()->route('medicines.index')->with('success', 'Data obat berhasil dihapus!');
    }
}

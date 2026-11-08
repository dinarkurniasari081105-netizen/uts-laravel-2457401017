@extends('layouts.app')

@section('title', 'Ubah Data Obat')

@section('content')
<div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 8px; border: 1px solid #dee2e6;">
    <h2 style="margin-top: 0; margin-bottom: 20px;">Form Ubah Data Obat</h2>
    <form action="{{ route('medicines.update', $medicine->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Nama Obat *</label>
            <input type="text" name="name" value="{{ old('name', $medicine->name) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('name') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Golongan Obat *</label>
            <select name="category" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="Obat Bebas" {{ old('category', $medicine->category) == 'Obat Bebas' ? 'selected' : '' }}>Obat Bebas</option>
                <option value="Obat Bebas Terbatas" {{ old('category', $medicine->category) == 'Obat Bebas Terbatas' ? 'selected' : '' }}>Obat Bebas Terbatas</option>
                <option value="Obat Keras" {{ old('category', $medicine->category) == 'Obat Keras' ? 'selected' : '' }}>Obat Keras</option>
            </select>
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Kode Obat *</label>
            <input type="text" name="code" value="{{ old('code', $medicine->code) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('code') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Tanggal Kedaluwarsa *</label>
            <input type="date" name="expired_at" value="{{ old('expired_at', $medicine->expired_at) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Harga Obat *</label>
            <input type="number" name="price" value="{{ old('price', $medicine->price) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Stok Persediaan *</label>
            <input type="number" name="stock" value="{{ old('stock', $medicine->stock) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; cursor: pointer;">
                <input type="checkbox" name="is_prescription_required" value="1" {{ old('is_prescription_required', $medicine->is_prescription_required) ? 'checked' : '' }}> Wajib Menggunakan Resep Dokter
            </label>
        </div>
        <div style="margin-bottom: 20px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Deskripsi Khasiat</label>
            <textarea name="description" rows="3" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">{{ old('description', $medicine->description) }}</textarea>
        </div>
        <div style="display: flex; gap: 10px;">
            <button type="submit" style="background-color: #ffc107; color: #212529; padding: 10px 20px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Perbarui Data</button>
            <a href="{{ route('medicines.index') }}" style="background-color: #6c757d; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; font-weight: bold;">Batal</a>
        </div>
    </form>
</div>
@endsection

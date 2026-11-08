@extends('layouts.app')
@section('title', 'Tambah Menu Baru')
@section('content')
<div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 8px; border: 1px solid #dee2e6;">
    <h2 style="margin-top: 0; margin-bottom: 20px;">Form Tambah Menu Kuliner</h2>
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Nama Hidangan *</label>
            <input type="text" name="name" value="{{ old('name') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('name') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Kategori Menu *</label>
            <select name="category" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="">-- Pilih Kategori --</option>
                <option value="Makanan Utama" {{ old('category') == 'Makanan Utama' ? 'selected' : '' }}>Makanan Utama</option>
                <option value="Makanan Ringan" {{ old('category') == 'Makanan Ringan' ? 'selected' : '' }}>Makanan Ringan</option>
                <option value="Minuman" {{ old('category') == 'Minuman' ? 'selected' : '' }}>Minuman</option>
            </select>
            @error('category') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Kode Menu *</label>
            <input type="text" name="code" value="{{ old('code') }}" placeholder="Contoh: MKN-001" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('code') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Harga Menu (Rupiah) *</label>
            <input type="number" name="price" value="{{ old('price') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('price') <span style="color: red; font-size: 13px;">{{ $message }}</span> @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; cursor: pointer;">
                <input type="checkbox" name="is_available" value="1" {{ old('is_available', true) ? 'checked' : '' }}> Menu Siap Disajikan (Tersedia)
            </label>
        </div>
        <div style="margin-bottom: 20px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Komposisi / Deskripsi Rasa</label>
            <textarea name="description" rows="3" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">{{ old('description') }}</textarea>
        </div>
        <div style="display: flex; gap: 10px;">
            <button type="submit" style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Simpan Hidangan</button>
            <a href="{{ route('menus.index') }}" style="background-color: #6c757d; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; font-weight: bold;">Batal</a>
        </div>
    </form>
</div>
@endsection

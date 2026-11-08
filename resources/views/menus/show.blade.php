@extends('layouts.app')

@section('title', 'Detail Menu Hidangan')

@section('content')
<div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 8px; border: 1px solid #dee2e6;">
    <h2 style="margin-top: 0; margin-bottom: 20px; border-bottom: 2px solid #d9534f; padding-bottom: 10px;">Detail Informasi Menu</h2>

    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr style="border-bottom: 1px solid #eee;">
            <td style="padding: 10px 0; font-weight: bold; width: 40%;">Nama Hidangan</td>
            <td style="padding: 10px 0; color: #d9534f; font-weight: bold;">{{ $menu->name }}</td>
        </tr>
        <tr style="border-bottom: 1px solid #eee;">
            <td style="padding: 10px 0; font-weight: bold;">Kategori</td>
            <td style="padding: 10px 0;">{{ $menu->category }}</td>
        </tr>
        <tr style="border-bottom: 1px solid #eee;">
            <td style="padding: 10px 0; font-weight: bold;">Kode Menu</td>
            <td style="padding: 10px 0;"><code>{{ $menu->code }}</code></td>
        </tr>
        <tr style="border-bottom: 1px solid #eee;">
            <td style="padding: 10px 0; font-weight: bold;">Harga Satuan</td>
            <td style="padding: 10px 0; font-weight: bold; color: #28a745;">Rp {{ number_format($menu->price, 0, ',', '.') }}</td>
        </tr>
        <tr style="border-bottom: 1px solid #eee;">
            <td style="padding: 10px 0; font-weight: bold;">Status Ketersediaan</td>
            <td style="padding: 10px 0;">
                @if($menu->is_available)
                    <span style="background-color: #d4edda; color: #155724; padding: 4px 8px; border-radius: 4px; font-size: 13px; font-weight: bold;">Tersedia (Ready)</span>
                @else
                    <span style="background-color: #f8d7da; color: #721c24; padding: 4px 8px; border-radius: 4px; font-size: 13px; font-weight: bold;">Habis / Kosong</span>
                @endif
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 0; font-weight: bold; vertical-align: top;">Deskripsi / Komposisi</td>
            <td style="padding: 10px 0; color: #6c757d; font-style: italic;">{{ $menu->description ?? 'Tidak ada deskripsi.' }}</td>
        </tr>
    </table>

    <div style="margin-top: 20px; border-top: 1px solid #dee2e6; padding-top: 15px;">
        <a href="{{ route('menus.index') }}" style="background-color: #6c757d; color: white; padding: 8px 15px; text-decoration: none; border-radius: 4px; font-weight: bold;">← Kembali ke Daftar</a>
    </div>
</div>
@endsection

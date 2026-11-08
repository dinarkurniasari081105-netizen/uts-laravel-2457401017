@extends('layouts.app')

@section('title', 'Detail Informasi Obat')

@section('content')
<div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 8px; border: 1px solid #dee2e6;">
    <h2 style="margin-top: 0; margin-bottom: 20px; border-bottom: 2px solid #28a745; padding-bottom: 10px;">Detail Informasi Obat</h2>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr style="border-bottom: 1px solid #eee;"><td style="padding: 10px 0; font-weight: bold; width: 40%;">Nama Obat</td><td style="padding: 10px 0; color: #28a745; font-weight: bold;">{{ $medicine->name }}</td></tr>
        <tr style="border-bottom: 1px solid #eee;"><td style="padding: 10px 0; font-weight: bold;">Golongan</td><td style="padding: 10px 0;">{{ $medicine->category }}</td></tr>
        <tr style="border-bottom: 1px solid #eee;"><td style="padding: 10px 0; font-weight: bold;">Kode Obat</td><td style="padding: 10px 0;"><code>{{ $medicine->code }}</code></td></tr>
        <tr style="border-bottom: 1px solid #eee;"><td style="padding: 10px 0; font-weight: bold;">Kedaluwarsa</td><td style="padding: 10px 0;">{{ $medicine->expired_at }}</td></tr>
        <tr style="border-bottom: 1px solid #eee;"><td style="padding: 10px 0; font-weight: bold;">Harga Satuan</td><td style="padding: 10px 0; font-weight: bold; color: #28a745;">Rp {{ number_format($medicine->price, 0, ',', '.') }}</td></tr>
        <tr style="border-bottom: 1px solid #eee;"><td style="padding: 10px 0; font-weight: bold;">Stok Persediaan</td><td style="padding: 10px 0;">{{ $medicine->stock }} Pcs</td></tr>
        <tr style="border-bottom: 1px solid #eee;"><td style="padding: 10px 0; font-weight: bold;">Syarat Pembelian</td><td style="padding: 10px 0;">{!! $medicine->is_prescription_required ? '<b style="color:red">Wajib Resep Dokter</b>' : 'Bebas Tanpa Resep' !!}</td></tr>
        <tr><td style="padding: 10px 0; font-weight: bold; vertical-align: top;">Khasiat Obat</td><td style="padding: 10px 0; color: #6c757d; font-style: italic;">{{ $medicine->description ?? 'Tidak ada deskripsi.' }}</td></tr>
    </table>
    <div style="margin-top: 20px; border-top: 1px solid #dee2e6; padding-top: 15px;">
        <a href="{{ route('medicines.index') }}" style="background-color: #6c757d; color: white; padding: 8px 15px; text-decoration: none; border-radius: 4px; font-weight: bold;">← Kembali</a>
    </div>
</div>
@endsection

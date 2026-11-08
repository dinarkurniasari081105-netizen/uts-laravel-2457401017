@extends('layouts.app')

@section('title', 'Daftar Obat')

@section('content')
<div style="max-width: 1200px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Daftar Persediaan Obat Apotek</h2>
        <a href="{{ route('medicines.create') }}" style="background-color: #28a745; color: white; padding: 8px 15px; text-decoration: none; border-radius: 4px; font-weight: bold;">+ Tambah Obat Baru</a>
    </div>

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 12px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #c3e6cb;">
            {{ session('success') }}
        </div>
    @endif

    <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
        <thead>
            <tr style="background-color: #f2f2f2; border-bottom: 2px solid #dee2e6; text-align: left;">
                <th style="padding: 12px; border: 1px solid #dee2e6;">No</th>
                <th style="padding: 12px; border: 1px solid #dee2e6;">Nama Obat</th>
                <th style="padding: 12px; border: 1px solid #dee2e6;">Golongan</th>
                <th style="padding: 12px; border: 1px solid #dee2e6;">Kode</th>
                <th style="padding: 12px; border: 1px solid #dee2e6;">Harga</th>
                <th style="padding: 12px; border: 1px solid #dee2e6;">Stok</th>
                <th style="padding: 12px; border: 1px solid #dee2e6;">Resep Dokter</th>
                <th style="padding: 12px; border: 1px solid #dee2e6; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($medicines as $index => $medicine)
                <tr style="border-bottom: 1px solid #dee2e6;">
                    <td style="padding: 12px; border: 1px solid #dee2e6;">{{ $index + 1 }}</td>
                    <td style="padding: 12px; border: 1px solid #dee2e6; font-weight: bold; color: #28a745;">{{ $medicine->name }}</td>
                    <td style="padding: 12px; border: 1px solid #dee2e6;">{{ $medicine->category }}</td>
                    <td style="padding: 12px; border: 1px solid #dee2e6;"><code>{{ $medicine->code }}</code></td>
                    <td style="padding: 12px; border: 1px solid #dee2e6;">Rp {{ number_format($medicine->price, 0, ',', '.') }}</td>
                    <td style="padding: 12px; border: 1px solid #dee2e6;">{{ $medicine->stock }} Pcs</td>
                    <td style="padding: 12px; border: 1px solid #dee2e6;">
                        @if($medicine->is_prescription_required)
                            <span style="background-color: #f8d7da; color: #721c24; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold;">Wajib Resep</span>
                        @else
                            <span style="background-color: #d4edda; color: #155724; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold;">Bebas</span>
                        @endif
                    </td>
                    <td style="padding: 12px; border: 1px solid #dee2e6; text-align: center;">
                        <a href="{{ route('medicines.show', $medicine->id) }}" style="background-color: #17a2b8; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px; font-size: 12px; margin-right: 5px;">Detail</a>
                        <a href="{{ route('medicines.edit', $medicine->id) }}" style="background-color: #ffc107; color: #212529; padding: 5px 10px; text-decoration: none; border-radius: 3px; font-size: 12px; margin-right: 5px;">Ubah</a>
                        <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Hapus data obat {{ $medicine->name }}?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: #dc3545; color: white; padding: 5px 10px; border: none; border-radius: 3px; font-size: 12px; cursor: pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="padding: 20px; text-align: center; color: #6c757d; font-style: italic;">Belum ada data obat.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

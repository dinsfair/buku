@extends('layouts.app')

@section('content')
    <div class="card-header" style="background-color: #ffcce6; color: #333;">
        Daftar Peminjaman Buku
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($peminjaman as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['judul_buku'] }}</td>
                    <td>{{ $item['penulis'] }}</td>
                    <td>{{ $item['tanggal_pinjam'] }}</td>
                    <td>{{ $item['tanggal_kembali'] }}</td>
                    <td>
                        @if($item['status'] == 'Dipinjam')
                        <span class="badge" style="background-color: #ffebf3; color: #333;">Dipinjam</span>
                    @elseif($item['status'] == 'Dikembalikan')
                        <span class="badge" style="background-color: #e6ffe6; color: #333;">Dikembalikan</span>
                    @else
                        <span class="badge" style="background-color: #f0e6ff; color: #333;">Belum Dikembalikan</span>
                    @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

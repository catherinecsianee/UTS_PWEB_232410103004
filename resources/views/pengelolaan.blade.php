@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<div class="container mt-5">
    <h2>Data Pengelolaan</h2>
    <!-- Tabel dengan Bootstrap -->
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['stok'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <section class="page-heading">
        <p class="eyebrow">Data akademik</p>
        <h1>Daftar Mahasiswa</h1>
        <p class="muted">Daftar mahasiswa dan informasi singkatnya.</p>
    </section>

    <section class="card table-card" aria-label="Data mahasiswa">
        <div class="table-scroll">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $data)
                        <tr>
                            <td>{{ $data['nama'] }}</td>
                            <td>{{ $data['alamat'] }}</td>
                            <td>
                                <span class="gender-badge">{{ $data['gender'] }}</span>
                                <span class="muted">({{ $data['gender'] === 'L' ? 'Laki-laki' : 'Perempuan' }})</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <p class="table-caption">Total {{ count($mahasiswa) }} mahasiswa</p>
    </section>
@endsection

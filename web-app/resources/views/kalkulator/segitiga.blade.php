@extends('layouts.app')

@section('title', 'Luas Segitiga')

@section('content')
    <section class="page-heading">
        <p class="eyebrow">Kalkulator geometri</p>
        <h1>Hitung Luas Segitiga</h1>
        <p class="muted">Masukkan panjang alas dan tinggi untuk menghitung luas segitiga.</p>
    </section>

    <section class="card calculator-card">
        <div class="formula">
            <span class="formula-label">Rumus luas</span>
            <strong>L = ½ × alas × tinggi</strong>
        </div>

        <form method="POST" action="{{ route('kalkulator.segitiga.hitung') }}">
            @csrf
            <div class="field">
                <label for="alas">Alas</label>
                <div class="input-with-unit">
                    <input id="alas" name="alas" type="number" step="any" min="0.001"
                        value="{{ old('alas', $alas) }}" placeholder="Contoh: 10" required>
                    <span>cm</span>
                </div>
                @error('alas')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="tinggi">Tinggi</label>
                <div class="input-with-unit">
                    <input id="tinggi" name="tinggi" type="number" step="any" min="0.001"
                        value="{{ old('tinggi', $tinggi) }}" placeholder="Contoh: 8" required>
                    <span>cm</span>
                </div>
                @error('tinggi')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Hitung luas</button>
        </form>

        @if ($hasil !== null)
            <div class="result" role="status">
                <span class="formula-label">Hasil perhitungan</span>
                <p>½ × {{ $alas }} × {{ $tinggi }} = <strong>{{ number_format($hasil, 2, ',', '.') }} cm²</strong></p>
            </div>
        @endif
    </section>
@endsection

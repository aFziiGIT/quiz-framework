<!DOCTYPE html>
<html>
<head>
    <title>Knowledge Hub Mini</title>
</head>
<body>
    <h1>Knowledge Hub Mini</h1>
    <p>Daftar Informasi Publik</p>
    <hr>

    @forelse($informasi as $item)
        <div>
            <h2>
                <a href="{{ route('public.show', $item->id) }}">{{ $item->judul }}</a>
            </h2>
            <p><strong>Kategori:</strong> {{ $item->kategori->nama }}</p>
            <p><strong>Ringkasan:</strong> {{ $item->ringkasan }}</p>
            <hr>
        </div>
    @empty
        <p>Belum ada informasi yang dipublikasikan.</p>
    @endforelse

    <br>
    <a href="{{ route('informasi.index') }}">&larr; Masuk Panel Management (Admin)</a>
</body>
</html>
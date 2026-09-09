<!DOCTYPE html>
<html>
<head>
    <title>{{ $informasi->judul }} - Knowledge Hub Mini</title>
</head>
<body>
    <h1>{{ $informasi->judul }}</h1>
    <p><strong>Kategori:</strong> {{ $informasi->kategori->nama }}</p>
    <p><strong>Sumber:</strong> {{ $informasi->sumber }}</p>
    <hr>

    <div>
        <p>{!! nl2br(e($informasi->isi)) !!}</p>
    </div>

    <br><hr>
    <a href="{{ route('public.index') }}">&larr; Kembali ke Daftar Informasi</a>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Management Informasi</title>
</head>
<body>
    <h1>Daftar Informasi (Admin)</h1>

    <a href="{{ route('informasi.create') }}">+ Tambah Informasi Baru</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Sumber</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($informasi as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kategori->nama }}</td>
                    <td>{{ $item->sumber }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('informasi.edit', $item->id) }}">Edit</a>
                        |
                        <form action="{{ route('informasi.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align:center;">Belum ada data informasi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <br>
    <a href="{{ route('public.index') }}">Lihat Tampilan Publik &rarr;</a>
</body>
</html>
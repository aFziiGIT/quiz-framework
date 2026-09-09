<!DOCTYPE html>
<html>
<head>
    <title>Edit Informasi</title>
</head>
<body>
    <h1>Edit Informasi</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('informasi.update', $informasi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="kategori_id">Kategori:</label><br>
        <select name="kategori_id" id="kategori_id" required>
            @foreach($kategori as $kat)
                <option value="{{ $kat->id }}" {{ old('kategori_id', $informasi->kategori_id) == $kat->id ? 'selected' : '' }}>
                    {{ $kat->nama }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="judul">Judul:</label><br>
        <input type="text" name="judul" id="judul" value="{{ old('judul', $informasi->judul) }}" required><br><br>

        <label for="ringkasan">Ringkasan:</label><br>
        <textarea name="ringkasan" id="ringkasan" rows="3" cols="50" required>{{ old('ringkasan', $informasi->ringkasan) }}</textarea><br><br>

        <label for="isi">Isi Informasi:</label><br>
        <textarea name="isi" id="isi" rows="6" cols="50" required>{{ old('isi', $informasi->isi) }}</textarea><br><br>

        <label for="sumber">Sumber:</label><br>
        <input type="text" name="sumber" id="sumber" value="{{ old('sumber', $informasi->sumber) }}" required><br><br>

        <label for="status">Status:</label><br>
        <select name="status" id="status" required>
            <option value="Published" {{ old('status', $informasi->status) == 'Published' ? 'selected' : '' }}>Published</option>
            <option value="Draft" {{ old('status', $informasi->status) == 'Draft' ? 'selected' : '' }}>Draft</option>
        </select>
        <br><br>

        <button type="submit">Update Informasi</button>
        <a href="{{ route('informasi.index') }}">Batal</a>
    </form>
</body>
</html>
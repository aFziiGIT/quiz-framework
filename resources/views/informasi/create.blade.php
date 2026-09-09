<!DOCTYPE html>
<html>
<head>
    <title>Tambah Informasi</title>
</head>
<body>
    <h1>Tambah Informasi Baru</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('informasi.store') }}" method="POST">
        @csrf

        <label for="kategori_id">Kategori:</label><br>
        <select name="kategori_id" id="kategori_id" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategori as $kat)
                <option value="{{ $kat->id }}" {{ old('kategori_id') == $kat->id ? 'selected' : '' }}>
                    {{ $kat->nama }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="judul">Judul:</label><br>
        <input type="text" name="judul" id="judul" value="{{ old('judul') }}" required><br><br>

        <label for="ringkasan">Ringkasan:</label><br>
        <textarea name="ringkasan" id="ringkasan" rows="3" cols="50" required>{{ old('ringkasan') }}</textarea><br><br>

        <label for="isi">Isi Informasi:</label><br>
        <textarea name="isi" id="isi" rows="6" cols="50" required>{{ old('isi') }}</textarea><br><br>

        <label for="sumber">Sumber:</label><br>
        <input type="text" name="sumber" id="sumber" value="{{ old('sumber') }}" required><br><br>

        <label for="status">Status:</label><br>
        <select name="status" id="status" required>
            <option value="Published" {{ old('status') == 'Published' ? 'selected' : '' }}>Published</option>
            <option value="Draft" {{ old('status') == 'Draft' ? 'selected' : '' }}>Draft</option>
        </select>
        <br><br>

        <button type="submit">Simpan Informasi</button>
        <a href="{{ route('informasi.index') }}">Batal</a>
    </form>
</body>
</html>
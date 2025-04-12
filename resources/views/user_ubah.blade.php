<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data User</title>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="{{ route('user.index') }}">Kembali</a>
    <br><br>

    <form method="post" action="{{ route('user.ubah_simpan', $data->user_id) }}">
        @csrf
        @method('PUT')

        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="{{ $data->username }}">
        <br>

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $data->nama }}">
        <br>

        <label for="level_id">Level ID</label>
        <input type="number" name="level_id" id="level_id" value="{{ $data->level_id }}">
        <br>

        <label for="password">Password (kosongkan jika tidak diubah)</label>
        <input type="password" name="password" id="password">
        <br>

        <input type="submit" value="Ubah" class="btn btn-success">
    </form>
</body>
</html>

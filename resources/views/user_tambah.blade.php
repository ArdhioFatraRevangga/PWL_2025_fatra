<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data User</title>
</head>
<body>
    <h1>Form Tambah Data User</h1>
    
    <a href="{{ route('user.index') }}">Kembali</a>

    <form method="POST" action="{{ route('user.tambah_simpan') }}">
        @csrf

        <br>
        <label>Username</label><br>
        <input type="text" name="username" placeholder="Masukkan Username">
        
        <br><br>
        <label>Nama</label><br>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        
        <br><br>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Masukkan Password">
        
        <br><br>
        <label>Level ID</label><br>
        <input type="number" name="level_id">

        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>
</html>

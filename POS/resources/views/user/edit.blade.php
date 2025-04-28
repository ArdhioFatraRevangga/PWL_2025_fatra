<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        <input type="text" name="nama" value="{{ $user->nama }}" required>
        <input type="email" name="email" value="{{ $user->email }}" required>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('user.index') }}">Kembali</a>
</body>
</html>

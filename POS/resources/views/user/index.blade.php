<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar User</title>
</head>
<body>
    <h1>Daftar User</h1>
    <a href="{{ route('user.create') }}">Tambah User</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('user.edit', $user->id) }}">Edit</a>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>

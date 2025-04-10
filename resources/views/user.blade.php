<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h1>Data User</h1>
    
    @if(count($data) > 0)
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level ID</th>
        </tr>
        @foreach ($data as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->id }}</td>
        </tr>
        @endforeach
    </table>
    @else
        <p>Belum ada data user.</p>
    @endif
</body>
</html>

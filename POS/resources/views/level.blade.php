<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Level</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Level</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Level</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($levels as $level)
                <tr>
                    <td>{{ $level->id }}</td>
                    <td>{{ $level->level_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

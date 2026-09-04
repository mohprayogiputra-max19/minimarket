<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Posts</title>
</head>
<body>
    <h1>Daftar Posts</h1>

    @if($posts->isEmpty())
        <p>Belum ada data post.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>{{ $post->title ?? 'Judul Post' }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div style="width:100%;height:100vh; display:flex; flex-deriction:column;">
        @foreach ($photo as $photos)
        <div style="width:100%; border:1px solid;display:flex;align-items:center; border-radius:10px;">
            <h1>{{ $photos->photo }}</h1>
            <audio src="{{ asset('storage/'.$photos->photo) }}" controls></audio>
        </div>
        @endforeach
    </div>
</body>
</html>
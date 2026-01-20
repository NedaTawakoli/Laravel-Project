<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div style="width:100%; height:100vh; background-color:purple;box-shadow:8px 8px 30px purple;">
    <h1>Insert Music</h1>
   <form action="{{ URL('song/insert') }}" method="POST" enctype="multipart/form-data">
    @csrf
   <input type="text" placeholder="Enter the singer name" name ="singer">
   <input type="file" accept="audio/*" placeholder="Enter the song" name="song">
   <button type="submit">Save</button>
   </form>
</div>
</body>
</html>
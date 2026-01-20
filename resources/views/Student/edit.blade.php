<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="width:70%; box-shadow:8px 8px 30px purple; border-radius:10px; margin:140px auto;">
        <h1 style="color:purple;font-size:30px; text-align:center; padding:15px 0 0 0;">
            Update Student
        </h1>
        <form action=" {{  URL('student/update',$student->id) }}" method="post" style="display:flex;flex-direction: column;gap:10px; width:100%;padding:15px; ">
            @csrf
            @method('put')
            <input value="{{ $student->name}}" style="padding:12px 25px; width:60%;border:1px solid; border-radius:8px; margin:5px auto;" type="text" name="name"> 
            <input value="{{ $student->lastName }}"  style="padding:12px 25px; width:60%;border:1px solid;focas:outline:0; border-radius:8px; margin:5px auto;" type="text" name="lastName"> 
            <input type="submit" value="Update" style="padding:10px 15px; width:30%;margin:0 auto; border-radius:5px; background-color:purple;box-shadow:8px 8px 30px purple;color:white;">
        </form>
    </div>
</body>
</html>
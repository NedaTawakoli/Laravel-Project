<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="width:90%;margin:30px auto;">
        <h1 style="text-align:center;font-size:30px;color:purple;text-shadow:15px 15px 20px gray;">All Student</h1>
        @if (session()->get('massage'))
            <h1>{{ session('massage') }}</h1>
        @endif
        <table style="border-radius:10px;width:100%; border-collapse:collapse; box-shadow:5px 5px 30px purple;">
            <tr>
                <th style="padding:0 15px;background-color:purple; color:white; padding:15px;">Id</th>
                <th style="padding:0 15px;background-color:purple; color:white; padding:15px;">Name</th>
                <th style="padding:0 15px;background-color:purple; color:white; padding:15px;">Last Name</th>
                <th style="padding:0 15px;background-color:purple; color:white; padding:15px;">User_id</th>
                <th style="padding:0 15px;background-color:purple; color:white; padding:15px;">edit/delete</th>
            </tr>
            @foreach ($student as $st)
                <tr>
                    <td style="box-shadow:1px 1px 30px purple; color:purple; font-size:20px; text-align:center;padding:10px;">{{ $st->id}}</td>
                    <td style="box-shadow:1px 1px 30px purple; color:purple; font-size:20px; text-align:center;padding:10px;">{{ $st->name}}</td>
                    <td style="box-shadow:1px 1px 30px purple; color:purple; font-size:20px; text-align:center;padding:10px;">{{ $st->lastName}}</td>
                    <td style="box-shadow:1px 1px 30px purple; color:purple; font-size:20px; text-align:center;padding:10px;">{{ $st->user_id}}</td>
                    <td style="box-shadow:1px 1px 30px purple; color:purple; font-size:20px; text-align:center;padding:10px;"><a href="{{ URL('student/edit',$st->id) }}">Update</a></td>
                   
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
{{-- @can('update',$st) @endcan --}}
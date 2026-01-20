<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['./resources/css/app.css','./resources/js/app.js'])
</head>
<body>
  <div class="h-screen w-full flex flex-col mt-5 gap-1.5">
    @if($customer->count()>0)
    <h1 class="text-center text-3xl">All Customer</h1>
    <table class="border w-[60%] mx-auto">
        <tr>
 <th style="padding:5px 10px;border:1px solid;background-color:orange;color:white;">ID</th>
 <th style="padding:5px 10px;border:1px solid;background-color:orange;color:white;">Name</th>
 <th style="padding:5px 10px;border:1px solid;background-color:orange;color:white;">LastName</th>
 <th style="padding:5px 10px;border:1px solid;background-color:orange;color:white;">Email</th>
 <th style="padding:5px 10px;border:1px solid;background-color:orange;color:white;">Gender</th>
 <th style="padding:5px 10px;border:1px solid;background-color:orange;color:white;">Profile Picture</th>
    </tr>
    @foreach ($customer as $customers)
        <tr>
            <td style="padding:10px 15px;border:1px solid;">{{ $custmers->id }}</td>
            <td style="padding:10px 15px;border:1px solid;">{{ $custmers->name }}</td>
            <td style="padding:10px 15px;border:1px solid;">{{ $custmers->lastName }}</td>
            <td style="padding:10px 15px;border:1px solid;">{{ $custmers->email }}</td>
            <td style="padding:10px 15px;border:1px solid;">{{ $custmers->gender }}</td>
            <td><img src="storage/{{ $customers->img_url}}" alt=""> </td>
        </tr>
    @endforeach
    </table>
    @else
    <h1 class="text-center text-3xl font-bold font-serif bg-red-500 py-4 mt-0">هیج مشتری وجود ندارد</h1>
    @endif
  </div>
</body>
</html>
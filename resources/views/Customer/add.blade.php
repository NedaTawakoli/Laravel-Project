<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['./resources/css/app.css','./resources/js/app.js'])
</head> 
<body>
   <div class=" w-full flex flex-col items-center gap-3 mt-11">
    <div class=" w-1/2 h-[80%] shadow-2xl shadow-purple-400">
        @if ($errors->count()>0)
        @foreach ($errors->all as $error)
            <div class="py-4 px-2 bg-red-600 text-white text-center">
                <h1>{{ $error }}</h1>
            </div>
        @endforeach
        @endif
    <h1 class="text-3xl font-serif bg-purple-500 w-full py-3 text-center text-white">Add New Customer</h1>
    <form action="{{ URL('customer/uploedCustomer') }}" method="POST" class=" h-11/12 space-y-4 px-2 bg-white" ectype="multipart/form-data">
        @csrf
        <input class="w-full py-3 outline-none border mt-3" type="text" placeholder="Name" name="name">
        <input class="w-full py-3 outline-none border" type="text" placeholder="LastName" name="lastName">
        <input class="w-full py-3 outline-none border" type="text" placeholder="Email" name="email">
        <select class="w-full py-3 outline-none  border" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input class="w-full py-3 outline-0 border bg-white" type="file" accept="images/*" placeholder="image" name="img">
        {{-- <input class="w-full py-3 outline-none border" type="text" placeholder="User Id" name="user_id"> --}}
        <button type="submit" class="border py-4 bg-purple-500 text-2xl text-white w-full">Save</button>
    </form>
</div>
</div>
</body>
</html>
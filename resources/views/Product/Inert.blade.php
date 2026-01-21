<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['./resources/css/app.css','./resources/js/app.js'])
</head>
<body>
   <div class="w-full gap-11 flex-col justify-butween items-center flex">
    <div class="border rounded-md p-6 lg:w-7/12 space-y-4 w-full md:w-8/12">
    <h1 class="text-3xl text-center text-slate-400">Add A Products</h1>
    <form class="w-8/12 space-y-2.5 flex-col flex mx-auto" action="{{ URL('product/create') }}" enctype="multipart/form-data" method="post">
        @csrf
        <input class="w-full outline-none py-3 border-slate-300" type="text" name="name" placeholder="Product Name">
        <input class="w-full outline-none py-3 border-slate-300" type="number" name="price" placeholder="Price">
        <input class="w-full outline-none py-3 border-slate-300" type="text" name="many" placeholder="How Many">
        <input class="w-full outline-none py-3 border-slate-300" type="text" name="madein" placeholder="Products of(Iran,Afghanistan)">
        <input class="w-full outline-none py-3 border-slate-300" type="file" accept="images/* " name="photo">
        {{-- <input class="w-full outline-none py-3 border-slate-300" type="number" name="productId" placeholder="Product Id"> --}}
        <textarea class="h-20 w-full outline-none py-3 border-slate-300" name="description" placeholder="Insert The Description Products"></textarea>
        <button type="submit" class="w-full py-4 border bg-slate-300 my-2 ">Save a product</button>
    </form>
</div>
   </div>
</body>
</html>
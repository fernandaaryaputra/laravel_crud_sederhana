<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-red-500 container w-full h-screen">
         <div class="flex bg-slate-400 justify-center items-center h-screen py-5">
            <div class=" py-4">
            <div class="mb-5">
                <h1 class="text-center font-bold text-xl">MENU</h1>
            </div>
            <div class="w-32 h-32 bg-green-500 flex justify-center items-center p-5 rounded-full hover:bg-amber-400 active:text-black">
                <a href="{{ url('/mahasiswas') }}" class="text-center text-white">DATA MAHASISWA</a>
            </div>
            </div>
         </div>
    </div>
</body>
</html>
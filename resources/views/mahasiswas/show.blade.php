<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    @vite('resources/css/app.css')
</head>
<body style="background: lightgray">
    <div class="bg-red-500 container w-full ">
         <div class="flex bg-slate-400 justify-center  py-5">
                        <div class="bg-white p-10 w-1/2">
                            <a href="{{ url('/mahasiswas') }}" class="text-lg font-bold hover:bg-black p-2 hover:rounded-full hover:text-white"><</a>
                            <h1 class="text-4xl text-center font-bold">Profile Mahasiswa</h1>
                            <hr>
                            <img src="{{ asset('img/avatar.png') }}" alt="" width="400" class="mx-auto">
                            <h4 class="text-xl">Nim: {{ $mahasiswa->nim }}</h4>
                            <h4 class="text-xl">Nama: {{ $mahasiswa->nama }}</h4>
                            <h4 class="text-xl">Alamat: {{ $mahasiswa->alamat }}</h4>
                            <h4 class="text-xl">Nomor Hp: {{ $mahasiswa->nomorhp }}</h4>
                            <p class="text-xl">Motivasi:</p>
                            <p class="text-xl" >
                            {!! $mahasiswa->motivasi !!}
                            </p>

                            
                        </div>
         </div>
    </div>
                            
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Data Mahasiswa</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    @vite('resources/css/app.css')
</head>
<body >
    <div class="bg-red-500 container w-full ">
         <div class="flex bg-cyan-400 justify-center  py-5">
                        <div class="bg-white p-10 w-1/2">
                        <form action="{{ route('mahasiswas.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            <H1 class="text-center text-4xl py-5 font-bold">FORM PENGISIAN DATA MAHASISWA</H1>
                            <div class="block mb-5">
                                <label class=" text-xl">NIM</label>
                                <br>
                                <input type="text" class="form-control @error('nim') is-invalid @enderror w-full p-2 bg-slate-500 text-lg text-black hover:bg-white hover:border hover:border-black focus:bg-white focus:border focus:border-black" name="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM">
                            
                                <!-- error message untuk nim -->
                                @error('nim')
                                    <div class="bg-red-600 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label class="text-xl">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror w-full p-2 bg-slate-500 text-lg text-black hover:bg-white hover:border hover:border-black focus:bg-white focus:border focus:border-black" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama ">
                            
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="bg-red-600 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           
                            <div class="mb-5">
                                <label class="text-xl ">ALAMAT</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror w-full p-2 bg-slate-500 text-lg text-black hover:bg-white hover:border hover:border-black focus:bg-white focus:border focus:border-black" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat ">
                            
                                <!-- error message untuk alamat -->
                                @error('alamat')
                                    <div class="bg-red-600 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                             <div class="mb-5">
                                <label class="text-xl">NOMOR HP</label>
                                <input type="text" class="form-control @error('nomorhp') is-invalid @enderror w-full p-2 bg-slate-500 text-lg text-black hover:bg-white hover:border hover:border-black focus:bg-white focus:border focus:border-black" name="nomorhp" value="{{ old('nomorhp') }}" placeholder="Masukkan Nomor Hp">
                            
                                <!-- error message untuk nomorhp -->
                                @error('nomorhp')
                                    <div class="bg-red-600 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-5 ">
                                <label class="text-xl">MOTIVASI</label>
                                <textarea class="form-control @error('motivasi') is-invalid @enderror " name="motivasi" rows="5" placeholder="Masukkan Motivasi Anda">{{ old('motivasi') }}</textarea>
                            
                                <!-- error message untuk motivasi -->
                                @error('motivasi')
                                    <div class="bg-red-600 mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="bg-green-500 px-4 py-2 rounded-xl">SIMPAN</button>
                            <button type="reset" class="bg-red-500 px-4 py-2 rounded-xl">RESET</button>
                            

                        </form> 
                        <br>
                        <a href="{{ url('/mahasiswas') }}" class="text-black underline hover:text-amber-400">Kembali</a>
                    </div>
                </div>
            </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'motivasi' );
</script>
</body>
</html>
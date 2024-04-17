<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Mahasiswa</title>
    @vite('resources/css/app.css')

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
</head>
<body style="background: lightgray">
    <div class="bg-red-500 container w-full ">
         <div class="flex bg-cyan-400 justify-center  py-5">
                        <div class="bg-white p-10 w-1/2">
                        <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <H1 class="text-center text-4xl py-5 font-bold">FORM EDIT DATA MAHASISWA</H1>
                            <div class="form-group block mb-5">
                                <label class="text-xl">NIM</label>
                                <input type="text" class="form-control @error('nim') is-invalid @enderror w-full p-2 bg-slate-500 text-lg text-black hover:bg-white hover:border hover:border-black focus:bg-white focus:border focus:border-black rounded-sm" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" placeholder="Masukkan NIM">
                            
                                <!-- error message untuk nim -->
                                @error('nim')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-5">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror w-full p-2 bg-slate-500 text-lg text-black hover:bg-white hover:border hover:border-black focus:bg-white focus:border focus:border-black rounded-sm" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" placeholder="Masukkan Nama">
                            
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-5">
                                <label class="font-weight-bold">ALAMAT</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror w-full p-2 bg-slate-500 text-lg text-black hover:bg-white hover:border hover:border-black focus:bg-white focus:border focus:border-black rounded-sm" name="alamat" value="{{ old('alamat', $mahasiswa->alamat) }}" placeholder="Masukkan alamat">
                            
                                <!-- error message untuk alamat -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-5">
                                <label class="font-weight-bold">NOMOR HP</label>
                                <input type="text" class="form-control @error('nomorhp') is-invalid @enderror w-full p-2 bg-slate-500 text-lg text-black hover:bg-white hover:border hover:border-black focus:bg-white focus:border focus:border-black rounded-sm" name="nomorhp" value="{{ old('nomorhp', $mahasiswa->nomorhp) }}" placeholder="Masukkan NomorHp">
                            
                                <!-- error message untuk nomorhp -->
                                @error('nomorhp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label class="font-weight-bold ">MOTIVASI</label>
                                <textarea class="form-control @error('motivasi') is-invalid @enderror" name="motivasi" rows="5" placeholder="Masukkan Motivasi">{{ old('motivasi', $mahasiswa->motivasi) }}</textarea>
                            
                                <!-- error message untuk motivasi -->
                                @error('motivasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="bg-green-500 px-4 py-2 rounded-xl">UPDATE</button>
                            <button type="reset" class="bg-red-500 px-4 py-2 rounded-xl">RESET</button>

                        </form> 
                        <br>
                        <a href="{{ url('/mahasiswas') }}" class="text-black underline hover:text-amber-400">Kembali</a>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'motivasi' );
</script>
</body>
</html>
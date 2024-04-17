<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-600">
    <div class="bg-red-500 container w-full h-screen">
         <div class="flex bg-slate-400 justify-center h-screen py-5">
                        <div class="bg-white p-10 w-1/2">
                            <h1 class="text-center text-6xl mb-10 font-bold">DAFTAR MAHASISWA </h1>
                            <a href="{{ route('mahasiswas.create') }}" class="bg-green-600 px-3 py-3 mt-5 mb-20">+ TAMBAH POST</a>
                            <p> </p>
                            <br>
                            <table border="2" class="table-auto w-full  border-separate   py-3">
                                <thead>
                                <tr class="bg-slate-800 text-white">
                                    <th class=" p-3">NIM</th>
                                    <th class=" px-5" >NAMA</th>
                                    <th >ALAMAT</th>
                                    <th >NOMOR HP</th>
                                    <th >MOTIVASI</th>
                                    <th style="width: 15%">AKSI</th>
                                </tr>
                                </thead>
                            <tbody>
                              @forelse ($mahasiswas as $mahasiswa)
                                <tr class="text-black">
                                    <td>{{ $mahasiswa->nim }}</td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>{!! $mahasiswa->alamat !!}</td>
                                    <td>{{ $mahasiswa->nomorhp }}</td>
                                    <td>{!! $mahasiswa->motivasi !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}" method="POST">
                                            <a href="{{ route('mahasiswas.show', $mahasiswa->id) }}" class="text-blue-500"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}" class="text-yellow-400"><i class="fa fa-pencil-alt"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-black"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $mahasiswas->links() }}
                          </div>
            </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>
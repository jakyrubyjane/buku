<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tgl. Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_buku as $buku)
        <tr>
            <td>{{ ++$no }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.') }}</td>
            <td>{{ date('d/m/y', strtotime($buku->tgl_terbit)) }}</td>
            <td>
                    <form action="{{route('buku.destroy', $buku->id)}}" method="post">
                        @csrf
                        <button onClick="return confirm('Yakin mau dihapus ?')">Hapus</button>
                    </form>
                    <form action="{{route('buku.edit', $buku->id)}}" method="post">
                        @csrf
                        <button onClick="return confirm('Yakin mau diedit ?')">Update</button>
                    </form>
                </td>
        </tr>
        
        @endforeach
    </tbody>
</table>
<div class="mt-3">
    <strong>Jumlah Data: </strong> {{$jumlahdata}}
</div>

<div class="mt-3">
    <strong>Total Harga: </strong> {{"Rp ".number_format($totalharga, 2, ',','.')}}
</div>
<button type="button" class="btn btn-secondary"><p><a href="{{route('buku.create')}}">Tambah Buku</a></p></button>
</body>
</html>



      

            
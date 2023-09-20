<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<div class="container">
        <h4>Edit Buku</h4>
        <form method="post" action="{{route('buku.update', $buku -> id)}}">
        @csrf
        <div>Judul <input type="text" name="judul" value="{{$buku->judul}}"></div>
        <div>Penulis <input type="text" name="penulis"value="{{$buku->penulis}}"></div>
        <div>Harga <input type="text" name="harga"value="{{$buku->harga}}"></div>
        <div>Tgl. Terbit<input type="text" name="tgl_terbit"value="{{$buku->tgl_terbit}}"></div>
        <div><button type="submit">Simpan</button>
        <a href="/buku">Batal</a></div>
        </form>
    </div>
</body>
</html>
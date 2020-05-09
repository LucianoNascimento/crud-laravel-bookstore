<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial Membuat CRUD Pada Laravel</title>
    <link rel="stylesheet" href="/css/text.css">
</head>

<body>
    <h3>Edit Buku</h3>
    <a href="#">Kembali</a>
    <br />
    <br />
    <form action="/books/update" method="post">
        {{ csrf_field() }}
        @foreach($buku as $p)
        <input type="hidden" name="id" value="{{ $p->id }}"><br />
        <span>Judul Buku</span><br><br>
        <input type="text" required="required" name="judul" value="{{ $p->judul }}"> <br />
        <br />
        <span>Penerbit</span><br><br>
        <input type="text" required="required" name="penerbit" value="{{ $p->penerbit }}"> <br />
        <br />
        <span>Tahun Terbit</span><br><br>
        <input type="text" required="required" name="tahun_terbit" value="{{ $p->tahun_terbit }}"> <br />
        <br />
        <span>Pengarang</span> <br><br>
        <input type="text" required="required" name="pengarang" value="{{ $p->pengarang }}"> <br />
        <input type="submit" value="Edit Data" style="margin-top: 30px;width:280px;">
    </form>
    @endforeach
</body>

</html>

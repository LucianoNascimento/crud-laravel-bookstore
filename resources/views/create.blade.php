<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial Membuat CRUD Pada Laravel</title>
    <link rel="stylesheet" href="/css/text.css">
</head>

<body>

    <h1>Tambah Buku</h1>

    <a href="#">Kembali</a>

    <br />
    <br />

    <form action="/books" method="post">
        {{ csrf_field() }}
        <span>Judul Buku</span><br><br>
        <input type="text" name="judul" required="required"> <br />
        <br>
        <span>Penerbit</span><br><br>
        <input type="text" name="penerbit" required="required"> <br />
        <br>
        <span>Tahun Terbit</span><br><br>
        <input type="text" name="tahun_terbit" required="required"> <br />
        <br>
        <span>Pengarang</span> <br><br>
        <input type="text" name="pengarang" required="required"> <br />
        <input type="submit" value="Simpan Data" style="margin-top: 30px;width:280px;">
    </form>

</body>

</html>

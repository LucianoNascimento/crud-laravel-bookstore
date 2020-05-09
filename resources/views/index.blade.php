<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Membuat CRUD Pada Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Daftar Buku disini</h1>
    <a href="/books/create">Simplan</a>
    <table>
        <tr>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Pengarang</th>
            <th>Perintah</th>
        </tr>
        <tr>
            @foreach($buku as $b)
            <td>{{$b->judul}}</td>
            <td>{{$b->penerbit}}</td>
            <td>{{$b->tahun_terbit}}</td>
            <td>{{$b->pengarang}}</td>
            <td>
                <a href="/books/edit/{{ $b->id }}">Edit</a>
                <a href="/books/{{$b->id}}">Hapus</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>

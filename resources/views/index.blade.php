<style type="text/css">
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
  background-color: #f4f4f4;
}

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #22DE78;;
  border: 1px solid white;
  padding: .35em;
  color: white;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

h1 {
  text-align: center;
}

</style>

<h1>Daftar Buku disini</h1>
<table>
    <tr>
      <th>Judul</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Pengarang</th>
      <th>Perintah</th>
    </tr>
    @foreach($buku as $b)
    <tr>
        <td>{{$b->judul}}</td>
        <td>{{$b->penerbit}}</td>
        <td>{{$b->tahun_terbit}}</td>
        <td>{{$b->pengarang}}</td>
        <td>
        <a href="/books/edit/{{ $b->id }}">Edit</a>
        
        <a href="/books/hapus/{{ $b->id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
</table>
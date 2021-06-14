<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
    table.static{
      position: relative;
      border: 1px cornsilk;
    }
  </style>
  <title>Cetak Barang Keluar</title>
</head>
<body>
  <div class="form-group">
    <p align="center"><b>Laporan Barang Keluar</b></p>
    <table class="table table-bordered" align="center" rules="all" border="1px" style="width: 90%;">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kode Barang</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Jenis</th>
          <th scope="col">Jumlah Barang</th>
          <th scope="col">Satuan</th>
          <th scope="col">Tanggal Keluar</th>
        </tr>
      </thead>
      <tbody align="center">
        @foreach ($barangKeluar as $barangKeluar)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $barangKeluar->dataBarang->kode_barang }}</td>
          <td>{{ $barangKeluar->dataBarang->nama_barang }}</td>
          <td>{{ $barangKeluar->dataBarang->jenis->nama_jenis }}</td>
          <td>{{ $barangKeluar->jml_barang }}</td>
          <td>{{ $barangKeluar->dataBarang->satuan->nama_satuan }}</td>
          <td>{{ $barangKeluar->tgl_keluar }}</td>
        </tr>
        @endforeach

        <script class="text/javascript">
          window.print();
        </script>
      </tbody>
    </table>
  </div>
  
</body>
</html>
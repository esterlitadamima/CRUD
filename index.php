<!DOCTYPE html>
<html>
<head>
    <title>Dialog</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

<h1 class="text-center">Produk</h1>
<h2 class="text-center">@Dialog</h2>

<!-- Awal Card Form -->
<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        Form input data Produk
</div>
<div class="card-body">
    <form method="post" action="">
        <div class="form-group">
            <label>No</label>
            <input type="text" name="no" class="form-control" placeholder="Input no" required>
        </div>
        <div class="form-group">
            <label>Kode Produk</label>
            <input type="text" name="Kode Produk" class="form-control" placeholder="input kode produk" required>
        </div>
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="Nama Produk" class="form-control" placeholder="Input nama produk" required>
        </div>
        <div class="form-group">
            <label>Deskripsi Produk</label>
            <input type="text" name="Deskripsi Produk" class="form-control" placeholder="Input deskripsi produk" required>
        </div>
        <div class="form-group">
            <label>Merek</label>
            <input type="text" name="Merek" class="form-control" placeholder="Input merek" required>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="text" name="Stok" class="form-control" placeholder="Input stok" required>
        </div>
        <div class="form-group">
            <label>Satuan Produk</label>
            <input type="text" name="Satuan Produk" class="form-control" placeholder="Input satuan produk" required>
        </div>
        <div class="form-group">
            <label>Tanggal Kadaluarsa</label>
            <input type="text" name="Tanggal Kadaluarsa" class="form-control" placeholder="Input tanggal kadaluarsa" required>
        </div>
        <div class="form-group">
            <label>Jumlah Produk</label>
            <input type="text" name="Jumlah Produk" class="form-control" placeholder="Input jumlah produk" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="Harga" class="form-control" placeholder="Input harga" required>
        </div>
        <div class="form-group">
            <label>supplier</label>
            <input type="text" name="supplier" class="form-control" placeholder="Input supplier" required>
        </div>
        <div class="form-group">
            <label>Karyawan</label>
            <input type="text" name="karyawan" class="form-control" placeholder="Input karyawan" required>
        </div>

        <button type="submit" class="btn btn-success" name="bsimpan">simpan</button>
        <button type="reset" class="btn btn-danger" name="breset">kosongkan</button>

    </form>

</div>
</div>
<!-- Akhir Card Form -->

<!-- Awal Card Tabel -->
<div class="card mt-4">
    <div class="card-header bg-success text-white">
        Daftar Produk
</div>
<div class="card-body">
  <table class="table table-bordered table-striped">
  <tr>
      <th>No</th>
      <th>Kode Produk</th>
      <th>Nama Produk</th>
      <th>Deskripsi Produk</th>
      <th>Merek</th>
      <th>Stok</th>
      <th>Satuan produk</th>
      <th>Tanggal Kadaluarsa</th>
      <th>Jumlah produk</th>
      <th>Harga</th>
      <th>Supplier</Th>
      <th>Karyawan</th>
      <th>Aksi</th>
</tr>

<tr>
    <td>1</td>
    <td>245</td>
    <td>Bedak</td>
    <td>lembut untuk kulit bayi</td>
    <td>My Baby</td>
    <td>5</td>
    <td>buah</td>
    <td>24 Nov 2022</td>
    <td>8</td>
    <td>10.000</td>
    <td>imesye</td>
    <td>ester</td>
    <td> 
        <a href= "#" class="btn btn-warning"> Edit </a>
        <a href= "#" class="btn btn-danger"> Hapus </a>
</table>
</div>
</div>
<!-- Akhir Card Tabel-->
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</head>
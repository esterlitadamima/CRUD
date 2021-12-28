<!DOCTYPE html>
<html>
<head>
    <title>WEB</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

<h1 class="text-center">Tugas Web CRUD</h1>
<h2 class="text-center">@damimaesterlita</h2>

<!-- Awal Card Form -->
<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        Form input data barang
</div>
<div class="card-body">
    <form method="post" action="">
        <div class="form-group">
            <label>No</label>
            <input type="text" name="no" class="form-control" placeholder="Input no" required>
        </div>
        <div class="form-group">
            <label>Kode Produk</label>
            <select class="form-control" name="tkode">
                <option></option>
                <option value="123-Susu Dancow">123-Susu Dancow</option>
                <option value="231-Susu SGM">231-Susu SGM</option>
                <option value="342-cococrunch">342-cococrunch</option>
                <option value="453-Milo">453-Milo</option>
</select>
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
            <label>Satuan Barang</label>
            <input type="text" name="Satuan Barang" class="form-control" placeholder="Input satuan barang" required>
        </div>
        <div class="form-group">
            <label>Tanggal Kadaluarsa</label>
            <input type="text" name="Tanggal Kadaluarsa" class="form-control" placeholder="Input tanggal kadaluarsa" required>
        </div>
        <div class="form-group">
            <label>Jumlah Tersedia Barang</label>
            <input type="text" name="Jumlah Tersedia Barang" class="form-control" placeholder="Input jumlah tersedia barang" required>
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

    </form>

</div>
</div>
<!-- Akhir Card Form -->

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</head>
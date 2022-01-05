<?php
    //koneksi database
    $server = "db4free.net";
    $user = "esterlita10";
    $pass = "christin1011";
    $database = "double_e";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

    //jika tombol simpan diklik
    if(isset($_POST['bsimpan']))
    {
        //pengujian data edit atau disimpan baru
        if($_GET['hal'] == "edit")
        {
            //data akan diedit 
            $edit = mysqli_query($koneksi, "UPDATE tb_produk set 
                                            kode_brg = '$_POST[tkode]',
                                            nama_brg = '$_POST[tnama]',
                                            deskripsi_brg = '$_POST[tdeskripsi]',
                                            merek = '$_POST[tmerek]',
                                            stok ='$_POST[tstok]',
                                            satuan_produk = '$_POST[tsatuan]',
                                            tgl_kadaluarsa = '$_POST[ttanggal]',
                                            jlh_tersedia_brg = '$_POST[tjumlah]',
                                            harga = '$_POST[tharga]',
                                            supplier = '$_POST[tsupplier]',
                                            karyawan = '$_POST[tkaryawan]'
                                            WHERE id_no = '$_GET[id]'
                                        ");
                                            
        if($edit) //jika edit sukses
        {
            echo "<script>
                alert('edit data sukses');
                document.location= 'index.php';
                </script>";
        }
        else
        {
            echo "<script>
                alert('edit data gagal');
                document.location= 'index.php';
                </script>";
        }
        }
        else
        {
            //data akan disimpan
            $simpan = mysqli_query($koneksi, "INSERT INTO tb_produk (kode_brg, nama_brg, deskripsi_brg,merek, stok, satuan_produk, tgl_kadaluarsa, jlh_tersedia_brg, harga, supplier, karyawan)
                                                VALUES ('$_POST[tkode]',
                                                        '$_POST[tnama]',
                                                        '$_POST[tdeskripsi]',
                                                        '$_POST[tmerek]',
                                                        '$_POST[tstok]',
                                                        '$_POST[tsatuan]',
                                                        '$_POST[ttanggal]',
                                                        '$_POST[tjumlah]',
                                                        '$_POST[tharga]',
                                                        '$_POST[tsupplier]',
                                                        '$_POST[tkaryawan]')
                                                ");
                                                        
            if($simpan) // jika simpan sukses 
            {
                echo  "<script>
                        alert('Simpan data Sukses);
                        document.location= 'index.php';
                        </script>";
            }
            else
            {
                echo  "<script>
                        alert('Simpan data GAGAL);
                        document.location= 'index.php';
                        </script>";
            }
        }
    }

    //pengujian jika tombol edit atau hapus diklik 
    if(isset($_GET['hal']))
    {
        //pengujian jika data diedit 
        if($_GET['hal'] == "edit")
        {
            //tampilkan data yang akan diedit 
            $tampil = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_no = '$_GET[id]' ");
            $data = mysqli_fetch_array($tampil);
            if($data)
            {
                //jika data ditemukan, maka ditampung dulu dalam variabel
                $vkode_brg =$data['kode_brg'];
                $vnama_brg =$data['nama_brg'];
                $vdeskripsi_brg =$data['deskripsi_brg'];
                $vmerek =$data['merek'];
                $vstok =$data['stok'];
                $vsatuan_produk =$data['satuan_produk'];
                $vtanggal_kadaluarsa =$data['tgl_kadaluarsa'];
                $vjumlah_tersedia_brg =$data['jlh_tersedia_brg'];
                $vharga =$data['harga'];
                $vsupplier =$data['supplier'];
                $vkaryawan =$data['karyawan'];
            }
        }
               
        else if ($_GET['hal'] == "hapus")
        {
            //persiapan hapus data 
            $hapus = mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id_no = '$_GET[id]' " );
            if($hapus){
                echo  "<script>
                        alert('Hapus Data Sukses');
                        document.location= 'index.php';
                        </script>";
            }
        }
    }
        
?>

<!DOCTYPE html>
<html>
<head>
    <title>Penjualan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

<h1 class="text-center">Barang Masuk</h1>
<h2 class="text-center">@Esterlita</h2>

<!-- Awal Card Form -->
<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        Form Barang Masuk
</div>
<div class="card-body">
    <form method="post" action="">
        <div class="form-group">
            <label>Kode barang</label>
            <input type="text" name="tkode" value="<?=@$vkode_brg?>" class="form-control" placeholder="masukkan kode barang" required>
        </div>
        <div class="form-group">
            <label>Nama barang</label>
            <input type="text" name="tnama" value="<?=@$vnama_brg?>" class="form-control" placeholder="masukkan nama barang" required>
        </div>
        <div class="form-group">
            <label>Deskripsi barang</label>
            <input type="text" name="tdeskripsi" value="<?=@$vdeskripsi_brg?>" class="form-control" placeholder="masukkan deskripsi barang" required>
        </div>
        <div class="form-group">
            <label>Merek</label>
            <input type="text" name="tmerek" value="<?=@$vmerek?>" class="form-control" placeholder="masukkan merek" required>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="text" name="tstok" value="<?=@$vstok?>" class="form-control" placeholder="masukkan stok" required>
        </div>
        <div class="form-group">
            <label>Satuan barang</label>
            <input type="text" name="tsatuan" value="<?=@$vsatuan_produk?>" class="form-control" placeholder="masukkan satuan barang" required>
        </div>
        <div class="form-group">
            <label>Tanggal Kadaluarsa</label>
            <input type="text" name="ttanggal" value="<?=@$vtanggal_kadaluarsa?>" class="form-control" placeholder="masukkan tanggal kadaluarsa" required>
        </div>
        <div class="form-group">
            <label>Jumlah barang</label>
            <input type="text" name="tjumlah" value="<?=@$vjumlah_tersedia_brg?>" class="form-control" placeholder="masukkan jumlah barang" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="tharga" value="<?=@$vharga?>" class="form-control" placeholder="masukkan harga" required>
        </div>
        <div class="form-group">
            <label>supplier</label>
            <input type="text" name="tsupplier" value="<?=@$vsupplier?>" class="form-control" placeholder="masukkan supplier" required>
        </div>
        <div class="form-group">
            <label>Karyawan</label>
            <input type="text" name="tkaryawan" value="<?=@$vkaryawan?>" class="form-control" placeholder="masukkan karyawan" required>
        </div>

        <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
        <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
    </form>
</div>
</div>
<!-- Akhir Card Form -->

<!-- Awal Card Tabel -->
<div class="card mt-4">
    <div class="card-header bg-success text-white">
        Data Barang Masuk
</div>
<div class="card-body">
  <table class="table table-bordered table-striped">
  <tr>
      <th>No</th>
      <th>Kode barang</th>
      <th>Nama barang</th>
      <th>Deskripsi barang</th>
      <th>Merek</th>
      <th>Stok</th>
      <th>Satuan barang</th>
      <th>Tanggal kadaluarsa</th>
      <th>Jumlah barang</th>
      <th>Harga</th>
      <th>Supplier</Th>
      <th>Karyawan</th>
      <th>Aksi</th>
</tr>
<?php
    $no = 1;
    $tampil = mysqli_query($koneksi, "SELECT * FROM tb_produk order by id_no desc");
    while($data = mysqli_fetch_array($tampil)) :
?>
<tr>
    <td><?=$no++;?></td>
    <td><?=$data ['kode_brg']?></td>
    <td><?=$data ['nama_brg']?></td>
    <td><?=$data ['deskripsi_brg']?></td>
    <td><?=$data ['merek']?></td>
    <td><?=$data ['stok']?></td>
    <td><?=$data ['satuan_produk']?></td>
    <td><?=$data ['tgl_kadaluarsa']?></td>
    <td><?=$data ['jlh_tersedia_brg']?></td>
    <td><?=$data ['harga']?></td>
    <td><?=$data ['supplier']?></td>
    <td><?=$data ['karyawan']?></td>
    <td>
        <a href ="index.php?hal=edit&id=<?=$data['id_no']?>" class="btn btn-warning"> Edit </a>
        <a href ="index.php?hal=hapus&id=<?=$data['id_no']?>" 
        onclick="return confirm('apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
    </tr>
    <?php endwhile; //penutup pengulangan while  ?>
</table>

</div>
</div>
<!-- Akhir Card Tabel-->

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
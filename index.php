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
        //pengujian dat edit atau disimpan baru
        if($_GET['hal'] == "edit")
        {
            //data akan diedit
        }else
        {
            //data akan diedit 
            $edit =mysqli_query($koneksi, " UPDATE tb_produk set 
                                            no = '$_POST[no]',
                                            kode_brg = '$_POST[kode_brg]',
                                            nama_brg = '$_POST[nama_brg]',
                                            deskripsi_brg = '$_POST[deskripsi_brg]',
                                            merek = '$_POST[merek]',
                                            stok ='$_POST[stok]',
                                            satuam_brg = '$_POST[satuan_brg]',
                                            tanggal_kadaluarsa = '$_POST[tanggal_kadaluarsa]',
                                            jumlah_tersedia_brg = '$_POST[jumlah_tersedia_brg]',
                                            harga = '$_POST[harga]',
                                            supplier = '$_POST[supplier]',
                                            karyawan = '$_POST[karyawan]',
                                            WHERE no = '$_GET[no]'
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
        $simmpan =mysqli_query($koneksi, "INSERT INTO tb_produk (kode_brg, nama_brg, deskripsi_brg, merek, stok, satuan_brg, tgl_kadaluarsa, jlh_tersedia_brg, harga, supplier, karyawan)
                                        VALUES ('$_POST[tno]',
                                               '$_POST[tkode]',
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
        if($simpan) //jika simpan sukses
        {
            echo "<script>
                alert('simpan data sukses');
                document.location= 'index.php';
                </script>";
        }
        else
        {
            echo "<script>
                alert('simpan data gagal');
                document.location= 'index.php';
                </script>";
        }
    }

        //pengujian jika tombol edit atau hapus diklik
        if(isset($_GET['hal']))
        {
            //pengujian edit data
            if($_GET['hal'] == "edit")
            {
                //tampilkan data edit
                $tampil = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE no ='$_GET[id]' ");
                $data = mysqli_fetch_array($tampil);
                if($data)
                {
                    //jika data didapat, ditampung dalam variabel
                    $vno = $data['no'];
                    $vkode_brg = $data['kode'];
                    $vnama_brg = $data['nama'];
                    $vdeskripsi_brg = $data['deskripsi'];
                    $vmerek = $data['merek'];
                    $vstok = $data['stok'];
                    $vsatuan_brg = $data['satuan'];
                    $vtanggal_kadaluarsa = $data['tanggal'];
                    $vjumlah_tersedia_brg= $data['jumlah'];
                    $vharga = $data['harga'];
                    $vsupplier = $data['supplier'];
                    $vkaryawan = $data['karyawan'];
                }
            }
            else if ($_GET['hal'] == "hapus")
            {
                //menghapus data
                $hapus = mysqli_query($koneksi, "DELETE FROM tb_produk WHERE no = '$_GET[id]' ");
                if($hapus){
                    echo "<script>
                            alert('hapus data sukses');
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
            <label>No</label>
            <input type="text" name="tno" value="<?=@$vno?>" class="form-control" placeholder="masukkan no" required>
        </div>
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
            <input type="text" name="tsatuan" value="<?=@$vsatuan_brg?>" class="form-control" placeholder="masukkan satuan barang" required>
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
    $tampil = mysqli_query($koneksi, "SELECT * FROM tb_produk order by no desc");
    while($data = mysqli_fetch_array($tampil)) :
?>
<tr>
    <td><?=$no++;?></td>
    <td><?=$data ['kode_brg']?></td>
    <td><?=$data ['nama_brg']?></td>
    <td><?=$data ['deskripsi_brg']?></td>
    <td><?=$data ['merek']?></td>
    <td><?=$data ['stok']?></td>
    <td><?=$data ['satuan_brg']?></td>
    <td><?=$data ['tgl_kadaluarsa']?></td>
    <td><?=$data ['jlh_tersedia_brg']?></td>
    <td><?=$data ['harga']?></td>
    <td><?=$data ['supplier']?></td>
    <td><?=$data ['karyawan']?></td>
    <td>
        <a href = "index.php?hal=edit&id=<?=$data['no']?>" class="btn btn-warning"> edit </a>
        <a href = "index.php?hal=hapus&id=<?=$data['no']?>" 
        onclick="retrun confirm('apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> hapus </a>
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
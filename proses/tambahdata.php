<?php
include "../config.php";

if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $fakultas = $_POST['fakultas'];

    $simpan = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim,nama,alamat,fakultas)  VALUES ('$nim','$nama','$alamat','$fakultas')");

    if ($simpan) {
        echo "<script>window.alert('Data berhasil diinput'); 
      window.location='../data'</script>";
    } else {
        echo "<script>window.alert('Data gagal diinput'); 
      window.location='../data'</script>";
    }
}

?>
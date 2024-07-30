<?php
include "../config.php";

    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $fakultas = $_POST['fakultas'];

    $simpan = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat', fakultas='$fakultas'");

    if ($simpan) {
        echo "<script>window.alert('Data berhasil diubah'); 
      window.location='../data'</script>";
    } else {
        echo "<script>window.alert('Data gagal diubah'); 
      window.location='../data'</script>";
    }
    
?>
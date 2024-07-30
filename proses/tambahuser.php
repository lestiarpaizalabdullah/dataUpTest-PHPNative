<?php
include "../config.php";
$name = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$password = md5('password');

    $query = mysqli_query($koneksi, "INSERT INTO user (nama,username,level,nohp,alamat,password) values ('$name','$username','$level','$nohp','$alamat','$password')");
    if($query) {
        echo "<script>window.alert('Data berhasil diubah'); 
        window.location='../user'</script>";
    } else {
        echo "<script>window.alert('Data berhasil diubah'); 
        window.location='../user'</script>";
    }

?>
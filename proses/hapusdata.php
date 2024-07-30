<?php
include "../config.php";

$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = '$id' ");

header("location:../data");

?>
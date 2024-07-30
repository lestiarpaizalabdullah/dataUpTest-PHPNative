<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <style>
        img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <section class="p-4" id="main-content">
        <h1 class="mt-3">Report</h1>
        <ol class="breadcrumb mt-3 mb-4">
            <li class="breadcrumb-item active">
                Halaman ini akan menampilkan report data
            </li>
        </ol>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5><i class="bi bi-file-earmark-fill mr-2"></i>Report Data</h5>
                </div>
                <div class="card-body mt-1">
                    <h2 style="text-align: center;"></h2>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Nim</th>
                                <th style="text-align: center;">Nama</th>
                                <th style="text-align: center;">Alamat</th>
                                <th style="text-align: center;">Fakultas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                            while ($tampildata = mysqli_fetch_array($data)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo $tampildata['nim'] ?>
                                    </td>
                                    <td>
                                        <?php echo $tampildata['nama'] ?>
                                    </td>
                                    <td>
                                        <?php echo $tampildata['alamat'] ?>
                                    </td>
                                    <td>
                                        <?php echo $tampildata['fakultas'] ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="btn-group dropup float-right">
                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="bi bi-printer-fill mr-2"></i>
                            Cetak Report
                        </button>
                        <ul class="dropdown-menu align mb-2" style="text-align: center; border-radius: 15px;">
                            <li><a class="dropdown-item"></a>
                                <tr class="float-left">
                                    <td>
                                        <a href="mahasiswa_excel.php" target="_blank" class="btn"><i
                                                class="fa fa-file-excel-o"></i><img src="assets/img/excel.png"> &nbspExcel</a>
                                    </td>
                                    <td>
                                        <a href="mahasiswa_pdf.php" target="_blank" class="btn"><i
                                                class="fa fa-file-pdf-o"></i><img src="assets/img/pdf.png"> &nbspPDF</a>
                                    </td>
                                </tr>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<!-- 
                    <div class="float-right">
                        <a href="mahasiswa_excel.php" target="_blank" class="btn btn-success"><i
                                class="fa fa-file-excel-o"></i> &nbsp Excel</a>
                        <a href="mahasiswa_pdf.php" target="_blank" class="btn btn-success"><i
                                class="fa fa-file-pdf-o"></i> &nbsp PDF</a>
                    </div>
                        -->
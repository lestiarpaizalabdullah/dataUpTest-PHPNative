<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <section class="p-4" id="main-content">
        <h1 class="mt-3">Data</h1>
        <ol class="breadcrumb mt-3 mb-4">
            <li class="breadcrumb-item active">
                Halaman ini akan menampilkan data
            </li>
        </ol>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5><i class="bi bi-clipboard2-data-fill mr-2"></i>Data</h5>
                </div>
                <div class="mt-3">
                    <nav class="navbar">
                    <div class="container-fluid">
                        <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari data" aria-label="Search">
                        <button class="btn btn-info" type="submit">Cari</button>
                        </form>
                    </div>
                    </nav>
                </div>
                <div class="card-body mt-1">
                    <h2 style="text-align: center;"></h2>
                    <div class="float-right">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modalInputData">
                            <i class="bi bi-plus-circle-fill mr-2"></i>Tambah Data
                        </button>

                        <!-- Tambah Data-->
                        <div class="modal fade" id="modalInputData" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="proses/tambahdata.php" method="POST">
                                            <div class="form-group">
                                                <label>Nim</label>
                                                <input type="text" name="nim" placeholder="Masukkan NIM"
                                                    class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama" placeholder="Masukkan Nama"
                                                    class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" name="alamat"
                                                    placeholder="Masukkan Alamat" rows="4" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Fakultas</label>
                                                <input type="text" name="fakultas" placeholder="Masukkan Fakultas"
                                                    class="form-control" required>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Nim</th>
                                <th style="text-align: center;">Nama</th>
                                <th style="text-align: center;">Alamat</th>
                                <th style="text-align: center;">Fakultas</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                            while ($tampildata = mysqli_fetch_array($data)) {
                                ?>
                                <tr>
                                    <th>
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
                                    <td>
                                    <div style="text-align: center;">
                                        <a class="btn btn-info" href="" data-bs-toggle="modal" data-bs-target="#modalViewData<?php echo $tampildata['id'] ?>"><i class="bi bi-eye-fill"></i></a>
                                        <a class="btn btn-primary"
                                            href="proses/editdata.php?id=<?php echo $tampildata['id'] ?>"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <a class="btn btn-danger"
                                            href="proses/hapusdata.php?id=<?php echo $tampildata['id'] ?>"><i
                                                class="bi bi-trash"></i></a>
                                    </div>
                                        <div class="modal fade" id="modalViewData<?php echo $tampildata['id'] ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="proses/tambahdata.php" method="POST">
                                                            <div class="form-group">
                                                                <label>Nim</label>
                                                                <input type="text" name="nim" placeholder="Masukkan NIM"
                                                                    class="form-control" disabled value="<?php echo $tampildata['nim'] ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Nama</label>
                                                                <input type="text" name="nama" placeholder="Masukkan Nama"
                                                                    class="form-control" disabled value="<?php echo $tampildata['nama'] ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <input class="form-control" name="alamat"
                                                                    placeholder="Masukkan Alamat" rows="4"
                                                                    disabled value="<?php echo $tampildata['alamat'] ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Fakultas</label>
                                                                <input type="text" name="fakultas"
                                                                    placeholder="Masukkan Fakultas" class="form-control"
                                                                    disabled value="<?php echo $tampildata['fakultas'] ?>">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
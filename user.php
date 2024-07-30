<?php
include "config.php";
$query = mysqli_query($koneksi, "SELECT * FROM user");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
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
                    Halaman User
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#ModalTambahUser">Tambah
                                User</button>
                        </div>
                    </div>
                    <!-- Modal Tambah useer baru -->
                    <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/tambahuser.php"
                                        method="POST">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="Nama Anda" name="nama" required>
                                                    <label for="floatingInput">Nama</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Nama
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="floatingInput"
                                                        placeholder="name@example.com" name="username" required>
                                                    <label for="floatingInput">Username</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Username
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="level" required>
                                                        <option selected hidden value="0">Pilih level user</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">User</option>
                                                        <option value="3">Customer</option>
                                                        <option value="4">Viewer</option>
                                                    </select>
                                                    <label for="floatingInput">Level User</label>
                                                    <div class="invalid-feedback">
                                                        Pilih Level User
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="floatingInput"
                                                        placeholder="08xxxxxxxxx" name="nohp">
                                                    <label for="floatingInput">No HP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" id="floatingInput"
                                                        placeholder="Password" value="1234" name="password">
                                                    <label for="floatingPassword">Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="" style="height:100px"
                                                name="alamat"></textarea>
                                            <label for="floatingInput">Alamat</label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="input_user_validate"
                                                value="1234">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- akkhiran Modal Tambah useer baru -->
                    <?php
                    foreach ($result as $row) {
                        ?>
                        <!-- Modal View -->
                        <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="proses/proses_input_user.php"
                                            method="POST">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="text" class="form-control" id="floatingInput"
                                                            placeholder="Nama Anda" name="nama"
                                                            value="<?php echo $row['nama'] ?>">
                                                        <label for="floatingInput">Nama</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="email" class="form-control" id="floatingInput"
                                                            placeholder="Nama Anda" name="nama"
                                                            value="<?php echo $row['username'] ?>">
                                                        <label for="floatingInput">Username</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Username
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <select disabled class="form-select"
                                                            aria-label="Default select example" required name="level" id="">
                                                            <?php
                                                            $data = array("Admin", "user", "customer", "viewer");
                                                            foreach ($data as $key => $value) {
                                                                if ($row['level'] == $key + 1) {
                                                                    echo "<option selected value='$key'>$value</option>";
                                                                } else {
                                                                    echo "<option value='$key'>$value</option>";
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                        <label for="floatingInput">Level User</label>
                                                        <div class="invalid-feedback">
                                                            Pilih Level User
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="number" class="form-control"
                                                            id="floatingInput" placeholder="08xxxxxxxxx" name="nohp"
                                                            value="<?php echo $row['nohp'] ?>">
                                                        <label for="floatingInput">No HP</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating">
                                                <textarea disabled class="form-control" id="" style="height:100px"
                                                    name="alamat"><?php echo $row['alamat'] ?></textarea>
                                                <label for="floatingInput">Alamat</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir modal view -->

                        <!-- Modal Edit -->
                        <div class="modal fade" id="ModalEdit<?php echo $row['id'] ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="proses/edituser.php"
                                            method="POST">
                                            <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput"
                                                            placeholder="Nama Anda" name="nama" required
                                                            value="<?php echo $row['nama'] ?>">
                                                        <label for="floatingInput">Nama</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="Nama Anda" name="username" required
                                                            value="<?php echo $row['username'] ?>">
                                                        <label for="floatingInput">Username</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Username
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" aria-label="Default select example"
                                                            required name="level" id="">
                                                            <?php
                                                            $data = array("Admin", "user", "customer", "viewer");
                                                            foreach ($data as $key => $value) {
                                                                if ($row['level'] == $key + 1) {
                                                                    echo "<option selected value=" . ($key + 1) . ">$value</option>";
                                                                } else {
                                                                    echo "<option value=" . ($key + 1) . ">$value</option>";
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                        <label for="floatingInput">Level User</label>
                                                        <div class="invalid-feedback">
                                                            Pilih Level User
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="floatingInput"
                                                            placeholder="08xxxxxxxxx" name="nohp"
                                                            value="<?php echo $row['nohp'] ?>">
                                                        <label for="floatingInput">No HP</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="" style="height:100px"
                                                    name="alamat"><?php echo $row['alamat'] ?></textarea>
                                                <label for="floatingInput">Alamat</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="input_user_validate"
                                                    value="1234">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir modal Edit -->
                        <?php
                    }
                    if (empty($result)) {
                        echo "Data user tidak ada";
                    } else {


                        ?>
                        <br>
                        <div class="table-responsive-lg">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Nama</th>
                                        <th style="text-align: center;">Username</th>
                                        <th style="text-align: center;">Level</th>
                                        <th style="text-align: center;">No HP</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($result as $row) {

                                        ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $no++ ?>
                                            </th>
                                            <td>
                                                <?php echo $row['nama'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['username'] ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($row['level'] == 1) {
                                                    echo "Admin";
                                                } elseif ($row['level'] == 2) {
                                                    echo "user";
                                                } elseif ($row['level'] == 3) {
                                                    echo "customer";
                                                } elseif ($row['level'] == 4) {
                                                    echo "viewer";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $row['nohp'] ?>
                                            </td>
                                            <td>
                                                <div style="text-align: center;">
                                                    <button class="btn btn-info" data-bs-toggle="modal"
                                                        data-bs-target="#ModalView<?php echo $row['id'] ?>"><i
                                                            class="bi bi-eye-fill"></i></button>
                                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#ModalEdit<?php echo $row['id'] ?>"><i
                                                            class="bi bi-pencil-square"></i></button>
                                                            <a class="btn btn-danger"
                                            href="proses/hapususer.php?id=<?php echo $row['id'] ?>"><i
                                                class="bi bi-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </section>
</body>

</html>
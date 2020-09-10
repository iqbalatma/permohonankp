<?php

session_start();

if (!isset($_SESSION["is_logged"])) {
    header("Location: index.php");
}
include_once("database/connection.php");


include('template_dashboard/header.php') ?>
<div class="wrapper">


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <img src="assets/AdminLTE-master/dist/img/unikom/logo_unikom.png" width="50" height="50" alt="Card image">
                    <span class="brand-text text-sm text-light">TEKNIK INFORMATIKA UNIKOM</span>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                    <li class="nav-header">FORM PENGAJUAN</li>
                    <li class="nav-item">
                        <a href="http://localhost/permohonankp/dashboard.php" class="nav-link">
                            <img src="assets/AdminLTE-master/dist/img/document.png" width="20" height="20" alt="Card image">
                            <p>Documentation</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/permohonankp/dashboard.php" class="nav-link" data-toggle="modal" data-target="#exampleModalHelp">
                            <img src="assets/AdminLTE-master/dist/img/question.png" width="20" height="20" alt="Card image">
                            <p>Help</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/permohonankp/logout.php" class="nav-link">
                            <img src="assets/AdminLTE-master/dist/img/logout.png" width="20" height="20" alt="Card image">
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>FORM PENGAJUAN KERJA PRAKTEK</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <img src="assets/AdminLTE-master/dist/img/unikom/logo_unikom.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                <span class="brand-text font-weight-light"><?= $_SESSION['nama']; ?></span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Content Wizard Title-->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">LANGKAH PENGAJUAN</h3>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="modal fade" id="exampleModalHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Help</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Untuk Informasi yang kurang dipahami bisa Hubungi</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <!-- Content Main Wizard-->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">

                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div id="smartwizard">
                                <!-- <form method="post" id="register_form"> -->
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link active_tab1" href="#step-1" id="form_1">
                                            1. Form Pengajuan Perusahaan
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link inactive_tab1" href="#step-2" id="form_2">
                                            2. Form Pengajuan Kelompok KP
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link inactive_tab1" href="#step-3" id="form_3">
                                            3. Tampil Data Mahasiswa
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <!-- Step 1 -->
                                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                        <div class="container">

                                            <!-- FORM PENGAJUAN -->
                                            <form action="progressstep1.php" method="POST" id="form_perusahaan" class="form_pengajuan">
                                                <div class="form-group">
                                                    <label for="namaPerusahaan">Nama Perusahaan / Instansi</label>
                                                    <select name="nama_perusahaan" class="form-control" id="nama_perusahaan">
                                                        <option disabled selected> Pilih Perusahaan </option>
                                                        <?php
                                                        $query = mysqli_query($connect, "SELECT * FROM perusahaan");
                                                        while ($data_perusahaan = mysqli_fetch_array($query)) {


                                                        ?>
                                                            <option value="<?= $data_perusahaan['nama_perusahaan'] ?>"><?= $data_perusahaan['nama_perusahaan'] ?></option>

                                                        <?php }; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="alamatPerusahaan">Alamat Perusahaan / Instansi</label>
                                                    <select name="alamat_perusahaan" class="form-control" id="alamat_perusahaan">
                                                        <option disabled selected> Pilih Alamat Perusahaan </option>
                                                        <?php
                                                        $query = mysqli_query($connect, "SELECT * FROM perusahaan");
                                                        while ($data_perusahaan = mysqli_fetch_array($query)) {


                                                        ?>
                                                            <option value="<?= $data_perusahaan['alamat_perusahaan'] ?>"><?= $data_perusahaan['alamat_perusahaan'] ?></option>

                                                        <?php }; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="deskripsi_kegiatan">Deskripsi Kegiatan</label>
                                                    <input type="text" name="deskripsi_kegiatan" class="form-control" id="deskripsi_kegiatan" placeholder="Contoh : Sebagai Teknisi Server " required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="kategori">Bidang kategori kerja praktek</label>
                                                    <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Example : Maintenance" required>
                                                </div>
                                            </form>


                                            <!-- MODAL !! -->
                                            <p>Jika data perusahaan yang saudara tuju tidak ada dalam list silahkan lakukan pengajuan melalui form berikut <a href="" data-toggle="modal" data-target="#exampleModal">Pengajuan</a></p>

                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="progresspengajuanperusahaan.php" method="post" id="form_pengajuan">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Pengajuan Perusahaan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="nama_perusahaan">Nama Perusahaan / Instansi</label>
                                                                    <input type="text" name="nama_perusahaan" class="form-control" id="namaPerusahaan" placeholder="Contoh : PT. Telkom Indonesia" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="alamat_perusahaan">Alamat Perusahaan / Instansi</label>
                                                                    <input type="text" name="alamat_perusahaan" class="form-control" id="alamatPerusahaan" placeholder="Contoh : Jl. Pahlawan Seribu" required>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" form="form_pengajuan" value="Submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 2 -->
                                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                    <div class="container-fluid">
                                        <table class="table table-hover">
                                            <tr>
                                                <td class="pt-3">Masukkan NIM mahasiswa</td>



                                                <!-- FORM CARI -->
                                                <td>
                                                    <form action="dashboard.php#step-2" method="POST">
                                                        <div class="form-group">
                                                            <input type="text" name="nim_mahasiswa" class="form-control" id="nim_mahasiswa" placeholder="Contoh : 1011****" required>
                                                        </div>
                                                </td>



                                                <!-- FORM MODAL -->
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" name="button_cari">Cari Mahasiswa</button></form>
                                                </td>
                                                <?php
                                                if (isset($_POST["button_cari"])) {
                                                    $data = file_get_contents('C:\xampp\htdocs\permohonankp\datamahasiswa.json');
                                                    $data_mahasiswa = json_decode($data, true);
                                                    $nim_mahasiswa = $_POST["nim_mahasiswa"];
                                                    $i = 0;
                                                    $ada = FALSE;
                                                    while ($i <= count($data_mahasiswa)) {
                                                        if ($data_mahasiswa[$i]['MAHASISWA']['nim'] == $nim_mahasiswa) {
                                                            // KALAU NIMNYA ADA
                                                            $ada = TRUE;



                                                            break;
                                                        } else {
                                                            // KALAU NIMNYA GA ADA
                                                            $ada = FALSE;
                                                            // break;
                                                        }

                                                        $i++;
                                                    }
                                                    if ($ada) {
                                                        $index = $i;
                                                        $nim_mahasiswa = $data_mahasiswa[$index]['MAHASISWA']['nim'];
                                                        $nama_mahasiswa = $data_mahasiswa[$index]['MAHASISWA']['nama'];

                                                        $progress_masuk = mysqli_query($connect, "INSERT INTO mahasiswa VALUES('', '$nim_mahasiswa', '$nama_mahasiswa','Anggota', 1)");
                                                        $ada = FALSE;
                                                    }
                                                }

                                                ?>

                                                <!-- MODAL -->
                                                <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Detail Mahasiswa</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="NIM">NIM Mahasiswa</label>
                                                                    <input type="text" name="NIM" class="form-control" id="NIM" placeholder="Tampil NIM Mahasiswa" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="namaMahasiswa">Nama Mahasiswa</label>
                                                                    <input type="text" name="namaMahasiswa" class="form-control" id="namaMahasiswa" placeholder="Tampil Nama Mahasiswa" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="statusKP">Status</label>
                                                                    <select class="form-control">
                                                                        <option>Status</option>
                                                                        <option>Co-Leader</option>
                                                                        <option>Anggota</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Tambah Anggota</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->

                                            </tr>
                                        </table>



                                        <!-- TABEL DATA PENGAJUAN MAHASISWA-->
                                        <table class="table table-hover table-light">
                                            <tr class="table-primary">
                                                <th>No</th>
                                                <th>NIM Mahasiswa</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Posisi</th>
                                                <th>Status</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Action</th>
                                            </tr>

                                            <?php
                                            $no = 1;
                                            $data_mahasiswa_lengkap = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE id_kelompok='1'");

                                            while ($d = mysqli_fetch_array($data_mahasiswa_lengkap)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $d['nim_mahasiswa']; ?></td>
                                                    <td><?php echo $d['nama_mahasiswa']; ?></td>
                                                    <td><?php echo $d['posisi']; ?></td>


                                                </tr>
                                            <?php
                                            }
                                            ?>



                                            </tr>
                                        </table>



                                    </div>
                                </div>

                                <!-- Step 3 -->
                                <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                                    <div class="container-fluid">
                                        <table class="table table-hover table-light">
                                            <tr class="table-primary">
                                                <th>No</th>
                                                <th>NIM Mahasiswa</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Status</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Approve/Reject</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020 <a href="http://if.unikom.ac.id">Teknik Informatik UNIKOM</a>.</strong> All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?php
include('template_dashboard/footer.php') ?>
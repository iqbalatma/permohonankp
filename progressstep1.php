<?php

session_start();
include_once('database/connection.php');

$id_perusahaan = $_POST['id_perusahaan'];
$alamat_perusahaan = $_POST['alamat_perusahaan'];
$deskripsi_kegiatan = $_POST['deskripsi_kegiatan'];
$bidang = $_POST['kategori'];
$nama_mahasiswa = $_SESSION['nama'];
$ketua_kelompok = $_SESSION['nim'];





$cek_user = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM kelompok_mahasiswa WHERE ketua_kelompok=$ketua_kelompok"));



if ($cek_user < 1) {

    $status_kelompok = "Belum Di Approve";
    $id_perusahaan = $id_perusahaan;
    $progress_masuk_kelompok = mysqli_query($connect, "INSERT INTO kelompok_mahasiswa VALUES('', '$ketua_kelompok', '$status_kelompok', '$deskripsi_kegiatan', '$bidang', $id_perusahaan)");




    $query = mysqli_query($connect, "SELECT * FROM kelompok_mahasiswa WHERE ketua_kelompok=$ketua_kelompok");
    $row = mysqli_fetch_row($query);

    // echo $row[0];
    $id_kelompok = $row[0];

    $progress_masuk_mahasiswa = mysqli_query($connect, "INSERT INTO mahasiswa VALUES('$ketua_kelompok', '$nama_mahasiswa', 'Ketua', '$id_kelompok')");
}







// if ($progress_masuk) {
//     echo "Input Data Berhasil";
// } else {
//     echo "Input Data Gagal";
// }



// echo $nama_perusahaan . " " . $alamat_perusahaan . " " . $deskripsi_kegiatan . " " . $bidang;
// $_SESSION['pengajuan_perusahaan'] = TRUE;
// header("Location: dashboard.php#step-2");

header("Location: dashboard.php#step-2");

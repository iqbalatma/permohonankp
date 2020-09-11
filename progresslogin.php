<?php
$data = file_get_contents('C:\xampp\htdocs\permohonankp\datamahasiswa.json');
$data_mahasiswa = json_decode($data, true);



if (isset($_POST['submit'])) {

    $nim = $_POST['username'];
    $nim = trim($nim);
    $nim = stripslashes($nim);
    $nim = htmlspecialchars($nim);
    $pwd = $_POST['password'];
    $pwd = trim($pwd);
    $pwd = stripslashes($pwd);
    $pwd = htmlspecialchars($pwd);






    for ($i = 0; $i < count($data_mahasiswa); $i++) {
        if ($data_mahasiswa[$i]['MAHASISWA']['nim'] == $nim) {
            if ($data_mahasiswa[$i]['MAHASISWA']['password'] == $pwd) {
                $success = TRUE;
                $nama = $data_mahasiswa[$i]['MAHASISWA']['nama'];
                break;
            } else {
                $success = FALSE;
            }
        } else {
            $success = FALSE;
        }
    }



    if ($success == TRUE) {
        session_start();
        $_SESSION["nim"] = $nim;
        $_SESSION["is_logged"] = TRUE;
        $_SESSION['nama'] = $nama;
        $_SESSION['pengajuan_perusahaan'] = FALSE;
        header("Location: dashboard.php");
    } else {
        echo "Gagal";
    }
}

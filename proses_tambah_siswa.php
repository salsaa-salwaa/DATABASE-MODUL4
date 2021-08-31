<?php
if ($_POST){
    $NAMA_SISWA = $_POST ['NAMA_SISWA'];
    $TANGGAL_LAHIR = $_POST ['TANGGAL_LAHIR'];
    $GENDER = $_POST ['GENDER'];
    $ALAMAT = $_POST ['ALAMAT'];
    $USERNAME = $_POST ['USERNAME'];
    $PASSWORD = $_POST ['PASSWORD'];
    $ID_KELAS = $_POST ['ID_KELAS'];
    $ID_JURUSAN = $_POST ['ID_JURUSAN'];
    if(empty($NAMA_SISWA)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($USERNAME)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($PASSWORD)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert= mysqli_query($conn,"insert into siswa (NAMA_SISWA,TANGGAL_LAHIR, GENDER, ALAMAT, USERNAME, PASSWORD, ID_KELAS, ID_JURUSAN) 
        value ('".$NAMA_SISWA."','".$TANGGAL_LAHIR."','".$GENDER."','".$ALAMAT."','".$USERNAME."','".md5($PASSWORD)."','".$ID_KELAS."','".$ID_JURUSAN."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tambah_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }
    }
}
?>




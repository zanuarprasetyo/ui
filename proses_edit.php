<?php
include("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){

    //ambil data dari form
    $nis = $_POST['nis'];
    $nama = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $no_tlp = $_POST['no_telp'];
    $kelas = $_POST['kelas'];

    // buat update query
    $sql = "UPDATE t_siswa SET 
            nama_lengkap='$nama', 
            alamat='$alamat', 
            jenis_kelamin='$jk', 
            no_telp='$no_tlp', 
            kelas='$kelas' WHERE nis = $nis";
    $query = mysqli_query($db,$sql) or die(mysqli_error($db));

    // apakah update berhasil
    if($query){

        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('location:index.php?status=sukses');
    }else{

        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('location:index.php?status=gagal');
    }
}else{
    die("Akses dilarang!!");
}
?>
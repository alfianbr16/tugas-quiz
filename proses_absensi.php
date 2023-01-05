<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $matakuliah= $_POST['mata_kuliah'];
    $pertemuan= $_POST['pertemuan'];

    // buat query
    $sql ="INSERT INTO nama (nama, npm, matakuliah, pertemuan)
    VALUES('$nama','$npm','$mata_kuliah','$pertemuan')";
    $squery = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.phpdengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>
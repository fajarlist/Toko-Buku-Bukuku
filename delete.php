<?php
    include 'koneksi/koneksi.php';

    $ISBN= $_GET['ISBN'];
    $sql = "SELECT * FROM tb_buku WHERE ISBN = '$ISBN'";
    $res = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($res);

    $files = glob('assets/cover/'.$data['cover']);
    foreach ($files as $file){
        if (is_file($file))
        unlink($file);
    }

    $sql = mysqli_query($koneksi,"DELETE FROM tb_buku WHERE ISBN='$ISBN'");
    if ($sql){
        echo "<script>
        alert('Data berhasil dihapus');
        document.location.href='daftar.php'
        </script>";
    }else{
        echo "<script>
        alert('Data gagal dihapus');
        document.location.href='daftar.php'
        </script>";
    }
?>


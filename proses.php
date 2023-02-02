<?php 

include 'koneksi/koneksi.php';

// if(isset($_POST['simpan'])){
$ISBN = $_POST['ISBN'];
$Judul = $_POST['Judul'];
$Kategori= implode(", ",$_POST['Kategori']);
$Sinopsis = $_POST['Sinopsis'];
$Penerbit = $_POST['Penerbit'];
$Pengarang = $_POST['Pengarang'];
$Tahun = $_POST['Tahun'];
$harga = $_POST['harga'];
$Cover = time(). ".jpg";

$path="assets/cover/";

move_uploaded_file($_FILES['cover']['tmp_name'], $path.$Cover);
mysqli_query($koneksi,"INSERT INTO tb_buku(ISBN, Judul, Kategori, Sinopsis, Penerbit, Pengarang, Tahun, harga, cover) 
values('$ISBN','$Judul','$Kategori','$Sinopsis','$Penerbit','$Pengarang','$Tahun','$harga','$Cover')");
header("Location: daftar.php");
?>

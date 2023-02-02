<?php 

include 'koneksi/koneksi.php';

if(isset($_POST['simpan']))
{
    $ISBN = $_POST['ISBN'];
    $Judul = $_POST['Judul'];
    $Kategori= implode (", " ,$_POST['Kategori']);
    $Sinopsis = $_POST['Sinopsis'];
    $Penerbit = $_POST['Penerbit'];
    $Pengarang = $_POST['Pengarang'];
    $Tahun = $_POST['Tahun'];
    $harga = $_POST['harga'];
    $Cover = time(). ".jpg";
    $path="assets/cover/";

    if(empty($_FILES['cover']['name']))
    {
        $sql = mysqli_query($koneksi, "UPDATE tb_buku SET
        Judul='$Judul',
        Kategori='$Kategori',
        Sinopsis='$Sinopsis',
        Penerbit='$Penerbit',
        Pengarang='$Pengarang',
        Tahun='$Tahun',
        harga = '$harga' WHERE ISBN='$ISBN'");
    
    if($sql)
    {
        echo "
        <script>
        alert('data berhasil diedit');
        document.location.href = 'daftar.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal diedit');
        </script>
        ";
    }
}else{
  if(move_uploaded_file($_FILES['cover']['tmp_name'], $path. $Cover))
  {
  $buku = mysqli_query ($koneksi, "SELECT* FROM tb_buku WHERE ISBN IN ('$ISBN')");
  $gambar = mysqli_fetch_object($buku);
  $path = "assets/cover/";

  if (is_file($path. $gambar ->cover))
    {
        unlink($path. $gambar->cover);
    }
    $sql = mysqli_query($koneksi, "UPDATE tb_buku SET
        Judul='$Judul',
        Kategori='$Kategori',
        Sinopsis='$Sinopsis',
        Penerbit='$Penerbit',
        Pengarang='$Pengarang',
        Tahun='$Tahun',
        harga = '$harga', 
        cover='$Cover' WHERE ISBN='$ISBN'");
    if($sql)
    {
        echo "
        <script>
        alert('data berhasil diedit');
        document.location.href = 'daftar.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data berhasil diedit');
        document.location.href = 'daftar.php';
        </script>
        ";
    }
  }
}
}

?>

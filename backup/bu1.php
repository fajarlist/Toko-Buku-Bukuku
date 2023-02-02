<!doctype html>
  <head>
    <title>Bukuku Bukumu</title>
  </head>
  <body>
    <div class="container">
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
              Tambah Buku
                </a>
            </div>
        </nav>
        <div class="card mb-3">
            <div class="card-body">
            <form method="post" action="proses.php" >
                <div class="mb-3">
                    <label for="ISBN" class="form-label">ISBN</label>
                    <input type="ISBN" class="form-control" id="ISBN" name="ISBN">
                </div>
                <div class="mb-3">
                    <label for="Judul" class="form-label">Judul</label>
                    <input type="Judul" class="form-control" id="Judul" name="Judul">
                </div>
                <div class="form-group">
                                    <label for="Kategori">Kategori</label>
                                    <select class="form-control" id="Kategori" name="Kategori">
                                        <option>Pilih Kategori</option>
                                        <?php 
                                            include 'koneksi/koneksi.php';
                                            $query = "SELECT * FROM tb_kategori";
                                            $result = mysqli_query($koneksi, $query);
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<option value='".$row['id_kategori']."'>".$row['nama_kategori']."</option>";
                                            }
                                        ?>
                                    </select>
                </div>
                <div class="mb-3">
                    <label for="Sinopsis" class="form-label">Sinopsis</label>
                    <input type="Sinopsis" class="form-control" id="Sinopsis" name="Sinopsis">
                </div>
                <div class="mb-3">
                    <label for="Penerbit" class="form-label">Penerbit</label>
                    <input type="Penerbit" class="form-control" id="Penerbit" name="Penerbit">
                </div>
                <div class="mb-3">
                    <label for="Pengarang" class="form-label">Pengarang</label>
                    <input type="Pengarang" class="form-control" id="Pengarang" name="Pengarang">
                </div>
                <div class="mb-3">
                    <label for="Tahun" class="form-label">Tahun Terbit</label>
                    <input type="Tahun" class="form-control" id="Tahun" name="Tahun">
                </div>
                <div class="mb-3">
                    <label action="upload.php" method="post" enctype="multipart/form-data" for="Cover" class="form-label">Cover</label>
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                </div>

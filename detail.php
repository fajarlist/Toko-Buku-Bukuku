<?php 
include 'koneksi/koneksi.php'; 
$ISBN = $_GET['ISBN'];
?>
<?php include 'header.php'?>


<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Detail Buku :</h4>
						</div>
						<div class="form-body">
                        <?php 
                $result = mysqli_query($koneksi," SELECT * FROM tb_buku WHERE ISBN = '$ISBN'");
                $d = mysqli_fetch_array($result)
                    ?>
							<form method="post" action="update.php" enctype="multipart/form-data"> 
                            
                            <div class="form-group"> 
                                <label for="ISBN" class="form-label">ISBN :</label>
                                <input type="text" class="form-control" id="ISBN" name="ISBN" value="<?php echo $d['ISBN']; ?>" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label for="Judul" class="form-label">Judul :</label>
                                <input type="text" class="form-control" id="Judul" name="Judul" value="<?php echo $d['Judul']; ?>" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label for="Kategori" class="form-label">Kategori :</label>
                                <input type="text" class="form-control" id="Kategori" name="Kategori" value="<?php echo $d['Kategori']; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="Sinopsis" class="form-label">Sinopsis :</label>
                                <textarea rows="7" cols="70" class="form-control" id="Sinopsis" name="Sinopsis" readonly><?php echo $d['Sinopsis']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="Pengarang" class="form-label">Pengarang :</label>
                                <input type="text" class="form-control" id="Pengarang" name="Pengarang" value="<?php echo $d['Pengarang']; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="Penerbit" class="form-label">Penerbit :</label>
                                <input type="text" class="form-control" id="Penerbit" name="Penerbit" value="<?php echo $d['Penerbit']; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="Tahun" class="form-label">Tahun Terbit :</label>
                                <input type="text" class="form-control" id="Tahun" name="Tahun" value="<?php echo $d['Tahun']; ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="cover">Cover</label>
                            </div>
                            <div class="mb-3">
                                <img src="assets/cover/<?php echo $d['cover']?>"width="100px">               
                            </div>

                            <div>
                                <a href="daftar.php" class="btn btn-warning">Kembali</a> 
                            </div>

                    </div>
                </div>
            </div>
</div>

            <?php include 'footer.php'?>
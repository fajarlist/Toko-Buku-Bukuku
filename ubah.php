<?php 
include 'koneksi/koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE ISBN='$_GET[ISBN]'");
$d = mysqli_fetch_assoc($sql);
?>
<?php include 'header.php'?>

<!-- main content start-->
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Edit Buku :</h4>
						</div>
						<div class="form-body">
                        <?php
                    include 'koneksi/koneksi.php';
                    $ISBN = $_GET['ISBN'];
                    $daftar = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE ISBN='$ISBN'");
                    while($d = mysqli_fetch_array($daftar)){
                        $see = explode(", ",$d['Kategori']);
                    ?>
							<form method="post" action="update.php" enctype="multipart/form-data"> 
                            
                            <div class="form-group"> 
                            <label for="ISBN" class="form-label">ISBN</label>
                    <input type="ISBN" class="form-control" id="ISBN" name="ISBN" value="<?php echo $d['ISBN']; ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="Judul" class="form-label">Judul</label>
                    <input type="Judul" class="form-control" id="Judul" name="Judul" value="<?php echo $d['Judul']; ?>">
                </div>

                <div class="form-group">
               <label for="Kategori">Kategori</label>
                <div>
                    <div class="checkbox-inline">
                   <?php 
                     include 'koneksi/koneksi.php';
                     $query = "SELECT * FROM tb_kategori";
                     $result = mysqli_query($koneksi, $query);
                     while ($row = mysqli_fetch_array($result)){                                                
                   ?>
                    <label >
                        <input  name= "Kategori[]" <?php if(in_array($row['nama_kategori'], $see)){ echo " checked"; } ?> value="<?php echo $row['nama_kategori'];?>" type="checkbox">
                        <?php echo $row['nama_kategori'];?>
                    </label></br>
                        <?php
                             }
                         ?>
                    </div>
                </div>
            </div>

                <div class="mb-3">
                    <label for="Sinopsis" class="form-label">Sinopsis</label>
                    <textarea rows="7" cols="70" class="form-control" id="Sinopsis" name="Sinopsis" ><?php echo $d['Sinopsis']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="Penerbit" class="form-label">Penerbit</label>
                    <input type="Penerbit" class="form-control" id="Penerbit" name="Penerbit" value="<?php echo $d['Penerbit']; ?>">
                </div>

                <div class="mb-3">
                    <label for="Pengarang" class="form-label">Pengarang</label>
                    <input type="Pengarang" class="form-control" id="Pengarang" name="Pengarang" value="<?php echo $d['Pengarang']; ?>">
                </div>

                <div class="mb-3">
                    <label for="Tahun" class="form-label">Tahun Terbit</label>
                    <input type="Tahun" class="form-control" id="Tahun" name="Tahun" value="<?php echo $d['Tahun']; ?>">
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $d['harga']; ?>">
                </div>

                <div class="mb-3">
                    <label for="cover">Cover</label>
                    </div>
                    <div class="mb-3">
                    <img src="assets/cover/<?php echo $d['cover']?>"width="100px">               
                    <input type="file" name="cover" id="cover" accept=".png, .jpg, .jpeg" class="form-control" value="<?php echo $d['cover']; ?>">
                </div>

                <input type="submit" value="Simpan" name="simpan" class="btn btn-primary"> 
                </form> 
                            <?php
                    }
                    ?>
						 </div>
					</div>
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
			</div>
		</div>

<?php include 'footer.php'?>

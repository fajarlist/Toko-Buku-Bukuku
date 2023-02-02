<?php
include 'koneksi/koneksi.php';
?>

<?php include 'header.php'?>

<!-- main content start-->
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Tambah Buku :</h4>
						</div>
						<div class="form-body">

							<form method="post" action="proses.php" enctype="multipart/form-data"> 
                            
                            <div class="form-group"> 
                            <label for="ISBN" class="form-label">ISBN</label>
                    <input type="text" rows="7" cols="70" class="form-control" id="ISBN" name="ISBN">
                </div>

                <div class="mb-3">
                    <label for="Judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="Judul" name="Judul">
                </div>


            <div class="form-group">
               <label for="Kategori">Kategori</label>
                <div>
                    <div class="checkbox-inline">
                   <?php 
                     include 'koneksi/koneksi.php';
                     $query = "SELECT * FROM tb_kategori";
                     $result = mysqli_query($koneksi, $query);
                     while($row = mysqli_fetch_array($result)){                                                
                   ?>
                    <label >
                        <input  name= "Kategori[]" value="<?php echo $row['nama_kategori'];?>" type="checkbox"><?php echo $row['nama_kategori'];?>
                    </label></br>
                        <?php
                             }
                         ?>
                    </div>
                </div>
            </div>


                <div class="mb-3">
                    <label for="Sinopsis" class="form-label">Sinopsis</label>
                    <textarea rows="7" cols="70" class="form-control" id="Sinopsis" name="Sinopsis"></textarea>
                </div>

                <div class="mb-3">
                    <label for="Penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="Penerbit" name="Penerbit">
                </div>

                <div class="mb-3">
                    <label for="Pengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="Pengarang" name="Pengarang">
                </div>

                <div class="mb-3">
                    <label for="Tahun" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="Tahun" name="Tahun">
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" >
                </div>

                <div class="mb-3">
                    <label for="cover">Cover</label>
                    <input type="file" name="cover" id="cover" accept=".png, .jpg, .jpeg" class="form-control">
                </div>

                <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                                
                                 <a href="daftar.php" class="btn btn-warning">View</a>  
                            </form> 
						 </div>
					</div>
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
			</div>
		</div>

<?php include 'footer.php'?>

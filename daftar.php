<?php include 'koneksi/koneksi.php'; ?>
<?php include 'header.php'?>
<?php include 'footer.php'?>

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
<div class="card mb-3">
            <div class="card-body">
            <table class="table table-striped">
            <tr>
                <th>ISBN</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Sinopsi</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Cover</th>
                <th>Harga</th>
                <th>Ditambahkan Pada</th>
                <th>Action</th>

		    </tr>
            <?php 
                $result = mysqli_query($koneksi," SELECT * from tb_buku");
                while($data = mysqli_fetch_array($result)){
            ?>
                    <tr>
                        <td><?php echo $data['ISBN']; ?></td>
                        <td><?php echo $data['Judul']; ?></td>
                        <td><?php echo $data['Kategori']; ?></td>
                        <td><?php echo substr ($data['Sinopsis'], 0, 150); ?>  ....</td>
                        <td><?php echo $data['Penerbit']; ?></td>
                        <td><?php echo $data['Pengarang']; ?></td>
                        <td><?php echo $data['Tahun']; ?></td>
                        <td><img src="assets/cover/<?php echo $data['cover'] ?>" width="100px"></td>
                        <td><?php echo $data['harga']; ?></td>
                        <td><?php echo $data['tambahan_data']; ?></td>
                        <td><a href="delete.php? ISBN=<?php echo $data['ISBN'] ?>"class="btn btn-danger">Hapus</a>
                        <a href="ubah.php? ISBN=<?php echo $data['ISBN'] ?>"class="btn btn-primary">edit</a>
                        <a href="detail.php? ISBN=<?php echo $data['ISBN'] ?>">Detail</a></td>
                    </tr>      
            <?php 
                }
            ?>
                </table>
                <a href="index.php"class="btn btn-primary">Tambah Buku</a>        
                 </div>
              </div>
            </div>    
        </div>
    </div>
</div>



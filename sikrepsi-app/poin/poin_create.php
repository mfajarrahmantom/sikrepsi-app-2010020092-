<?php
if (isset($_POST['simpan'])) {
    $nama_poin = $_POST['nama_poin'];
    $poin = $_POST['poin'];
    $q = "insert into poin values (null, '$nama_poin', '$poin')";
    $exe = mysqli_query($konek, $q);
    if ($exe){
        echo "<script>alert('Tambah data poin berhasil');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?page=poin'";
    } else {
        echo "<script>alert('Tambah data poin gagal dengan keterangan: '" . mysqli_error($konek) . ");</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?page=poin'";
    }
}

?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-reader">
                    <h4>Tambah Data Poin</h4>
                </div>
                <div class="card-body">
                    <form class="row g-3" action="" method="post">
                        <div class="col-md-12">
                            <label for="" class="form-label">Nama Poin</label>
                            <input type="text" name="nama_poin" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="" class="form-label">Poin</label>
                            <input type="number" min=1 step=1 name="poin" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="simpan" class="btn btn-success btn-sm float-right">Simpan</button>
                            <a href="?page=poin" class="btn btn-danger btn-sm float-right">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

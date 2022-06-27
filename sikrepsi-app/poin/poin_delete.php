<?php
$id = $_GET['id'];
if (isset($id)) {
    $q = "delete from poin where id='$id'";
    $exe = mysqli_query($konek, $q);
    if ($exe){
        echo "<script>alert('Hapus data poin berhasil');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?page=poin'";
    } else {
        echo "<script>alert('Hapus data poin gagal dengan keterangan: '" . mysqli_error($konek) . ");</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?page=poin'";
    }
}

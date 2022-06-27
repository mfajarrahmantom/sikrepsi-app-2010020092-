<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-reader">
                    <h4>Data Poin</h4>
                    <a href="?page=poin_create" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Poin</th>
                                <th>Poin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $q = "select * from poin";
                            $exe = mysqli_query($konek, $q);
                            while ($data = mysqli_fetch_array($exe)) {
                                echo "<tr>
                                        <td>" . $data[0] . "</td>
                                        <td>" . $data[1] . "</td>
                                        <td>" . $data[2] . "</td>
                                        <td>
                                            <a href='?page=poin_edit&id=" . $data[0] . "' class='btn btn-warning btn-sm'>Edit</a>
                                            <a href='?page=poin_delete&id=" . $data[0] . "' class='btn btn-danger btn-sm' 
                                            onclick='return confirm(\"Hapus data ini?\");'>Hapus</a>
                                        </td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

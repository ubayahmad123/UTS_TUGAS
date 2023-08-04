<!-- fungsi masukan -->
<?php include "../partial/top.php";
include "../koneksi.php" ?>
<div class="topbar">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header waves-effect w-md waves-light center">
                    <h5 class="text-black">Tabel Data </h5>
                </div>

                <div class="card-body">
                    <a href="tambah.php" class="btn btn-success waves-effect w-md waves-light"><i class="fa fa-plus">Tambah</i></a>
                    <hr>
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>

                                <th>Id guru</th>
                                <th>Nama Guru</th>
                                <th>Keahlian</th>
                                <th>Mata Pelajaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        $a = 0;
                        $data = mysqli_query($conn, "SELECT * FROM guru");
                        while ($inidata = mysqli_fetch_array($data)) {
                            $a++;
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $a; ?></td>

                                    <td><?php echo $inidata['id_guru']; ?></td>
                                    <td><?php echo $inidata['nama_guru']; ?></td>
                                    <td><?php echo $inidata['keahlian']; ?></td>
                                    <td><?php echo $inidata['mata_pelajaran']; ?></td>
                                    <td>
                                        <a href="updatedata.php?id_guru=<?php echo $inidata['id_guru'] ?>"><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>
                                        <a href="updatedata.php?Id_guru=<?php echo $inidata['id_guru'] ?>" class="edit">Update</a>
                                        <a href="hapus.php?id_guru=<?php echo $inidata['id_guru'] ?>" onclick="return confirm('Yakin Hapus ?')" class="herf"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                        <a href="hapus.php?id_guru=<?php echo $inidata['id_guru'] ?>" onclick="return confirm('Yakin Hapus ?')" class="danger">hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../partial/bottom.php" ?>
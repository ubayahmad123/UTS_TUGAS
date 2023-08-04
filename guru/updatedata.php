<!-- fungsi masukan -->
<?php include "../partial/top.php";
include "../koneksi.php";
$idku = $_GET['id_guru'];
$update = mysqli_query($conn, "SELECT * FROM guru WHERE id_guru=$idku");
$dataupdate = mysqli_fetch_array($update);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header waves-effect w-md waves-light center">
                    <h5 class="text-black">Update Data Asrama</h5>
                </div>
                <div class="card-body">
                    <form action="prosesupdate.php" class="form-horizontal" method="POST">

                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="example-email">NAMA ASRAMA</label>
                            <div class="col-10">
                                <input type="hidden" class="form-control" name="id_guru" value="<?php echo $dataupdate['id_guru']; ?>">
                                <input type="text" class="form-control" name="nama_asrama" value="<?php echo $dataupdate['nama_guru']; ?>">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-email" class="col-2 col-form-label">Nama Guru</label>
                            <div class="col-10">
                                <input type="text" class="form-control" name="nama_guru" value="<?php echo $dataupdate['nama_guru']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email" class="col-2 col-form-label">Keahlian</label>
                            <div class="col-10">
                                <input type="text" class="form-control" name="keahlian" value="<?php echo $dataupdate['keahlian']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email" class="col-2 col-form-label">Mata Pelajaran</label>
                            <div class="col-10">
                                <input type="text" class="form-control" name="mata_pelajaran" value="<?php echo $dataupdate['mate_pelajaran']; ?>">
                            </div>
                        </div>


                        <hr>
                        <div class="form-group text-right m-b-0">

                            <a href="index.php" class="btn btn-secondary"><i class="fi-rewind"></i>kembali</a>

                            <input type="submit" class="btn btn-primary" value="update">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../partial/bottom.php" ?>
<!-- fungsi masukan -->
<?php include "../partial/top.php" ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header waves-effect w-md waves-light center">
                    <h5 class="text-black">Tambah Data Guru</h5>
                </div>

                <div class="card-body">
                    <form action="from_tambah.php" class="form-horizontal" method="POST">

                        <div class="form-group row">
                            <label for="example-email" class="col-2 col-form-label">ID Guru</label>
                            <div class="col-10">
                                <input type="text" name="id_guru" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email" class="col-2 col-form-label">Nama Guru</label>
                            <div class="col-10">
                                <input type="text" name="nama_guru" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email" class="col-2 col-form-label">Keahlian</label>
                            <div class="col-10">
                                <input type="text" name="keahlian" class="form-control">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-email" class="col-2 col-form-label">Mata Pelajaran</label>
                            <div class="col-10">
                                <input type="text" name="mata_pelajaran" class="form-control">
                            </div>
                        </div>


                        <hr>
                        <div class="form-group text-right m-b-0">
                            <a href="index.php" class="btn btn-secondary"><i class="fi-rewind"></i>kembali</a>
                            <button class="btn btn-danger" type="reset">
                                <i class="fa fa-refresh"></i>Reset
                            </button>
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-plus"></i>Tambah
                            </button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../partial/bottom.php" ?>
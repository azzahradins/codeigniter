<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Form Edit Data Mahasiswa
        </div>
        <div class="card-body">
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama"> Nama </label>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $mahasiswa["id"]?>">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa["nama"]?>">
                </div>
                <div class="form-group">
                    <label for="nim"> Nim </label>
                    <input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa["nim"]?>">
                </div>
                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $mahasiswa["email"]?>">
                </div>
                <div class="form-group">
                    <label for="jurusan"> Jurusan </label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option selected> - </option>
                        <option value="informatika">Informatika</option>
                        <option value="kimia">Kimia</option>
                        <option value="mesin">Mesin</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
            </form>
        </div>
    </div>
</div>
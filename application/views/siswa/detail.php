<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">NIM : <?= $siswa["Nim"];?></li>
                        <li class="list-group-item">Nama : <?= $siswa["Nama"];?></li>
                        <li class="list-group-item">Alamat : <?= $siswa["Alamat"];?></li>
                    </ul>
                    <a href="<?= base_url();?>siswa" class="btn btn-primary"> Kembali </a>
                </div>
            </div>
        </div>
    </div>
</div>
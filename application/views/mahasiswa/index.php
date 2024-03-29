<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <?php
                if($this->session->userdata('level') == "admin"){
            ?>
                <a href="<?= base_url();?>mahasiswa/tambah" class="btn btn-primary"> Tambah Data </a>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <?php if ($this->session->flashdata('flash-data')) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                    Data mahasiswa <strong> berhasil </strong> <?= $this->session->flashdata('flash-data') ?> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </div>
            <?php } ?>
            <h2> Daftar Mahasiswa </h2>
            
            <form action="" method="post">
                <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Cari Data Mahasiswa" aria-label="Cari Data Mahasiswa" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </div>
        </form>

        <!-- Disini untuk exception apabila mahasiswa kosong -->
        <?php
                if(empty($mahasiswa)){
                    ?>
                <div class="alert alert-danger" role="alert">
                    Data mahasiswa tidak ditemukan.
                </div>
                <?php
                }else{
                    ?>
            <ul class="list-group">
                <?php
                foreach($mahasiswa as $mhs){ ?>
                <li class="list-group-item"> <?= $mhs["nama"];?>
                <?php if ($this->session->userdata('level') == 'admin') { ?>
                    <a href="<?= base_url();?>mahasiswa/hapus/<?= $mhs["id"];?>" class="badge badge-danger float-right"
                    onclick="return confirm('Yakin data ini akan dihapus');">Hapus</a>
                    <a href="<?= base_url();?>mahasiswa/edit/<?= $mhs["id"];?>" class="badge badge-primary float-right">Edit</a>
                <?php } ?>
                <a href="<?= base_url();?>mahasiswa/detail/<?= $mhs["id"];?>" class="badge badge-success float-right">Detail</a>
                    
            </li>
            <?php }?>
        </ul>
        <?php
                }
                ?>
        </div>
    </div>
</div>
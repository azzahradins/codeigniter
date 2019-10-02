<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <h2> Daftar Siswa </h2>
            <?php if ($this->session->userdata('level') == 'admin') { ?>
            <a href="<?= base_url();?>siswa/tambah" class="btn btn-primary float-right"> Tambah Data </a>
            <?php }?>
            <form action="" method="post">
              <div class="input-group mb-3">
                  <input type="text" class="form-control" name="keyword" placeholder="Cari Data Siswa" aria-label="Cari Data Mahasiswa" aria-describedby="button-addon2">
                  <div class="input-group-append">
                      <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                  </div>
              </div>
            </form>
            
            <?php if ($this->session->flashdata('flash-data')) { ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                Data mahasiswa <strong> berhasil </strong> <?= $this->session->flashdata('flash-data') ?> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </div>
            <?php } ?>

            <?php
              if(empty($siswa)){ ?>
                <div class="alert alert-danger">
                  Data Siswa tidak ditemukan
                </div>
            <?php  
              }else{
            ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Privileges</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($siswa as $sw){ ?>
        <tr>
            <td><?= $sw['Nim']; ?></td>
            <td><?= $sw['Nama']; ?></td>
            <td><?= $sw['Alamat']; ?></td>
            <td>
              <a href="<?= base_url();?>siswa/detail/<?= $sw['Id']; ?>" class="badge badge-success"> Detail </a>
              <?php if ($this->session->userdata('level') == 'admin') { ?>
              <a href="<?= base_url();?>siswa/edit/<?= $sw['Id']; ?>" class="badge badge-info"> Edit </a>
              <a href="<?= base_url();?>siswa/hapus/<?= $sw['Id']; ?>" class="badge badge-danger"
              onclick="return confirm('Yakin <?= $sw['Nama'];?> ini akan dihapus');"> Hapus </a>
              <?php } ?>
            </td>
        </tr>
    <?php } ?>
  </tbody>
</table>
<?php
              }
?>
        </div>
    </div>
</div>
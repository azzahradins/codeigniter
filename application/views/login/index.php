<?php
echo form_open('login/proses_login');
?>
<div class="container">
    <div class="row py-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card rounded-2">
                        <div class="card-header">
                            <h3> Login </h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="post">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-8" name="uname1" id="uname1"
                                    required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pass1">Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-8" name="pass1" id="pass1"
                                    required="" autocomplete="new-password">
                                    <div class="invalid-feedback">Enter your password too</div>
                                </div>
                                <button type="submit" class="btn btn-success" id="buttonLogin">Login</button>
                            </form> 
                            <?php if ($this->session->flashdata('login')) { ?>
                                <div class="alert alert-danger fade show" role="alert">
                                Login <strong> <?= $this->session->flashdata('login') ?> </strong>
                                </div>
                            <?php }else{ ?>
                                <div class="alert alert-success fade show" role="alert">
                            <?php echo $pesan; } ?> 
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
form_close();
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title> <?php echo $title ?> </title>
        <style>
        .badge{
            margin-right: 5px;
        }
        .btn{
            margin-bottom: 10px;
        }
        </style>
    </head>
<body>

<!-- Navbar Bootstrap -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-inverse">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>">CodeIgniter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>mahasiswa">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>siswa">Siswa</a>
            </li>
            <li class="nav-item">
            <?php if(!$this->session->userdata('level')){ ?>
                <a class="nav-link" href="<?= base_url()?>login">Login</a>
            <?php }else{ ?>
                <a class="nav-link" href="<?= base_url()?>login/logout">Logout</a>
            <?php
            }         
            ?>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li> Anda Login Sebagai : </li>
        </ul>
    </div>
    </div>
</nav>
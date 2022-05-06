<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Universitas Indo Global Mandiri Palembang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets');?>/css/style.css">
</head>

<body>
    <div class="registration-form">
        <form action="<?Php echo base_url('index.php/Login');?>/autentication" method="post">
            <div class="login-logo text-center mb-5">
                <?php if($this->session->flashdata('login')): ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4> <i class="icon fa fa-check"></i> login!</h4>
                    <?php echo $this->session->flashdata('login');?>
                </div>
                <?php endif; ?>
                <center>
                    <img alt="Logo" class="card-img-top col-lg-9 " src="<?php echo base_url('assets');?>/logo.JPG" />
                </center>
                <h1>
                    <b> Universitas Indo Global Mandiri Palembang</b>
                </h1>
            </div>
            <div class="login-logo text-center mb-4">
                <?php if(!$this->session->flashdata('login')): ?>
                <?php else: ?>
                <?php echo $this->session->flashdata('login'); ?>
                <?php endif; ?></h4>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="nip" placeholder="NIP">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <select class="form-control" name="jabatan">
                    <option value="2">Dosen/Mahasiswa</option>
                    <option value="1">Pegawai</option>
                    <option value="3">Kaprodi</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Login</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
    </script>
    <script src="<?php echo base_url('assets');?>/js/script.js"></script>
</body>

</html>
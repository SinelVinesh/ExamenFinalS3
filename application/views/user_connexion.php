<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data['login'] = true;
$this->load->view('common/header.php',$data);
?>
    <body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row" style="min-height: 60vh;">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image" style="background-image: url(<?php echo base_url('assets/img/dogs/image3.jpeg')?>);"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Bienvenue !</h4>
                                </div>
                                <form class="user" action="<?php echo site_url('Connexion/connect_as_simple_user')?>" method="post">
                                    <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Identifiant" name="username"></div>
                                    <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Mot de passe" name="password"></div>
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small"></div>
                                    </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('common/footer.php');?>
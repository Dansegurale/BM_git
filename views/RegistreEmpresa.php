<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Borsa Mila</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!--
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/estil.css');?>">  
    <link rel="stylesheet" href="<?php echo base_url('fontawesome/web-fonts-with-css/css/fontawesome-all.css');?>">
-->
<link rel="stylesheet" href="<?php echo base_url('fontawesome/web-fonts-with-css/css/fontawesome-all.css');?>">
</head>

<body class="h-100 bg-dark">
<header class="container-fluid">
<nav class="row navbar navbar-expand-lg navbar-dark bg-primary">
   <!-- boto toggler-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <a class="navbar-brand d-none d-sm-block" href="#">Borsa Milà</a>
    
    <div class="row bg-primary order-lg-4">
                
        <!--infoAdmin-->
        <div class="col p-0">
                <button type="button" class="btn btn-primary p-2 px-4" data-toggle="modal" data-target="#adminModal"><i class="fas fa-question-circle"></i></button>
                <!-- Modal-Admin -->
                <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="adminTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="adminTitle">
                                    Ajuda
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <p class="col-12">
                                        Per a demanar ajuda al administrador:
                                    </p>
                                    <div class="row mx-1 my-2">
                                        <div class="col-12 col-md-6">E-Mail:</div>
                                        <div class="col-12 col-md-6">admin@admin.com</div>
                                    </div>
                                    <div class="row mx-1 my-2">
                                        <div class="col-12 col-md-6">Telefon:</div>
                                        <div class="col-12 col-md-6">908909080</div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--modal-Admin-->
            </div>                
        <!--logoutModal-->
        <div class="col p-0">
            <button type="button" class="btn btn-primary p-2 px-4" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt"></i></button>
            <!-- Modal-logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="logoutTitle">
                                <?php /*echo lang('PanellControlUsuari'); TRADUCCION AQUI*/ ?>
                                 Segur que vol sortir?
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <?php echo anchor(site_url('Login/Logout'),'SI','class="btn btn-primary"');?>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal-logout-->
        </div>
    </div>
    <!--links-->
    <div class="collapse navbar-collapse pt-3 pt-md-0" id="navbarSupportedContent">
        <ul class="nav nav-pills justify-content-end mb-2">
            <li class="nav-item"><?php echo anchor(site_url('RegistreEmpresa/index/cat'),'<img src="'.base_url('assets/own/img/catalan.png').'" alt="catalan" style="width:40px;height:20px;">')?>
                </li>
            <li class="nav-item"><?php echo anchor(site_url('RegistreEmpresa/index/es') ,'<img src="'.base_url('assets/own/img/spanish.png').'" alt="catalan" style="width:40px;height:20px;">')?>
                </li>
            <li class="nav-item"><?php echo anchor(site_url('RegistreEmpresa/index/en') ,'<img src="'.base_url('assets/own/img/english.png').'" alt="catalan" style="width:40px;height:20px;">')?>
                </li>
        </ul>
    </div>
</nav>
</header>
<div class="container-fluid">

    <form action="" method="post">
        <section class="row justify-content-center bg-white mx-1 my-3">
            <h4 class="col-12"><?php echo lang('TitolDadesUsuari'); ?></h4>
            <article class="col-12 col-md-6" name="UserData">
                <div class="form-group row mx-1 my-2">
                    <label for="SignUpEmpNickname" class="d-none d-sm-block col-sm-4 col-form-label"><?php echo lang('Nickname'); ?></label>
                    <input type="text" class="col form-control" id="SignUpEmpNickname" placeholder="<?php echo lang('Nickname'); ?>">
                </div>
                <div class="form-group row mx-1 my-2">
                    <label for="SignUpEmpPwd" class="d-none d-sm-block col-sm-4 col-form-label"><?php echo lang('Pwd'); ?></label>
                    <input type="password" class="col form-control" id="SignUpEmpPwd" placeholder="<?php echo lang('Pwd'); ?>">
                </div>
                <div class="form-group row mx-1 my-2">
                    <label for="SignUpEmpPwd2" class="d-none d-sm-block col-sm-4 col-form-label"><small><?php echo lang('PwdConfirm'); ?></small></label>
                    <input type="password" class="col form-control" id="SignUpEmpPwd2" placeholder="<?php echo lang('PwdConfirm'); ?>">
                </div>
                <div class="form-group row mx-1 my-2">
                    <label for="SignUpEmpEmail" class="d-none d-sm-block col-sm-4 col-form-label"><?php echo lang('Email'); ?></label>
                    <input type="email" class="col form-control" id="SignUpEmpEmail" placeholder="<?php echo lang('Email'); ?>">
                </div>
            </article>
            <article class="col-12 col-md-6" name="PersonalInfo">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group row mx-1 mr-md-0 my-2">
                            <label for="SignUpEmpNom" class="d-none d-sm-block col-sm-3 col-form-label"><?php echo lang('Nom'); ?></label>
                            <input type="text" class="col form-control" id="SignUpEmpNom" placeholder="<?php echo lang('Nom'); ?>">
                        </div>
                    </div>
                    <div class="col-12 order-md-3">
                        <div class="form-group row mx-1 my-2">
                            <label for="SignUpEmpCognoms" class="d-none d-sm-block col-sm-3 col-form-label"><?php echo lang('Cognoms'); ?></label>
                        <input type="password" class="col form-control" id="SignUpEmpCognoms" placeholder="<?php echo lang('Cognoms'); ?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group row mx-1 ml-md-0 my-2">
                            <label for="SignUpEmpNif" class="d-none d-sm-block col-sm-3 col-form-label"><?php echo lang('Nif'); ?></label>
                            <input type="password" class="col form-control" id="SignUpEmpNif" placeholder="<?php echo lang('Nif'); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row mx-1 my-2">
                    <label for="SignUpEmpCarrec" class="d-none d-sm-block col-sm-3 col-form-label"><?php echo lang('Carrec'); ?></label>
                    <input type="email" class="col form-control" id="SignUpEmpCarrec" placeholder="<?php echo lang('Carrec'); ?>">
                </div>
                <div class="form-group row mx-1 my-2">
                    <label for="SignUpEmpDpt" class="d-none d-sm-block col-sm-3 col-form-label"><?php echo lang('Dpt'); ?></label>
                    <input type="email" class="col form-control" id="SignUpEmpDpt" placeholder="<?php echo lang('Dpt'); ?>">
                </div>
            </article>
        </section>
        <section class="row justify-content-center bg-white mx-1 my-3">
           <h4 class="col-12"><?php echo lang('TitolDadesEmpresa'); ?></h4>
            <article class="col-12 col-md-6">
                <div class="form-group row mx-1 my-2">
                    <label for="SignUpEmpCIF" class="d-none d-sm-block col-sm-4 col-form-label"><?php echo lang('CIF'); ?></label>
                    <input type="text" class="col form-control" id="SignUpEmpCIF" placeholder="<?php echo lang('CIF'); ?>">
                </div>
                <div class="form-group row mx-1 my-2">
                    <label for="SignUpEmpSSocial" class="d-none d-sm-block col-sm-4 col-form-label"><?php echo lang('RaoSocial'); ?></label>
                    <input type="text" class="col form-control" id="SignUpEmpRaoSocial" placeholder="<?php echo lang('RaoSocial'); ?>">
                </div>
                <div class="form-group row mx-1 my-2">
                    <label for="SignUpEmpSeuSocial" class="d-none d-sm-block col-sm-4 col-form-label"><?php echo lang('SeuSocial'); ?></label>
                    <input type="text" class="col form-control" id="SignUpEmpSeuSocial" placeholder="<?php echo lang('SeuSocial'); ?>">
                </div>
                <div class="form-group row mx-1 my-2">
                    <label for="SignUpEmpWebsite" class="d-none d-sm-block col-sm-4 col-form-label"><?php echo lang('Website'); ?></label>
                    <input type="text" class="col form-control" id="SignUpEmpWebsite" placeholder="<?php echo lang('Website'); ?>">
                </div>
            </article>
            <article class="col-12 col-md-6">
                
            </article>
        </section>
    </form>
</div>
    <!-- /.container-fluid -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    Include all compiled plugins (below), or include individual files as needed 
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
    -->
</body>

</html>

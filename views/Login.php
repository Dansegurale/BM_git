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
-->
<link rel="stylesheet" href="<?php echo base_url('assets/own/css/estil.css');?>">  
</head>

<body class="h-100 bg-dark">
    <div class="container-fluid">
        <ul class="nav nav-pills justify-content-end mb-2">
            <li class="nav-item">'<?php echo anchor(site_url('Login/index/cat'),'<img src="'.base_url('assets/own/img/catalan.png').'" alt="catalan" style="width:40px;height:20px;">')?>></li>
            <li class="nav-item">'<?php echo anchor(site_url('Login/index/es') ,'<img src="'.base_url('assets/own/img/spanish.png').'" alt="catalan" style="width:40px;height:20px;">')?>></li>
            <li class="nav-item">'<?php echo anchor(site_url('Login/index/en') ,'<img src="'.base_url('assets/own/img/english.png').'" alt="catalan" style="width:40px;height:20px;">')?>></li>
        </ul>
        <div class="row justify-content-center h-100">
            <div class="col-12 col-md-5 h-50 h-md-75">
               
                <div class="loginContainer" id="loginContainerEmpresa">
                    <!--<button type="button" class="col-12 btn btn-primary" data-toggle="collapse" data-target="#zonaLoginEmpresa">
                        <?php echo lang('TitolEmpresa'); ?>
                    </button>-->
                    
                    <div class=" bg-light" id="zonaLoginEmpresa">
                        <form action="<?php echo site_url('Login/LoginEmpresa/')?>" method="post">
                            <div class="form-group mb-3 mb-1-md p-2">
                                <label class="d-none d-sm-block" for="LoginEmpresaMail"><?php echo lang('EmailInput'); ?></label>
                                <input type="email" class="form-control" id="LoginEmpresaMail" name="LoginEmpresaMail" aria-describedby="emailHelp" placeholder="<?php echo lang('EmailInput'); ?>">
                                <script>
                                window.addEventListener("load",funcioPrincipal)
                                function funcioPrincipal(){
                                    var mimail=document.getElementById("LoginEmpresaMail");
                                    mimail.addEventListener("input",function(){
                                        console.info(mimail.value);
                                    });
                                }
                                </script>
                                <small id="LoginEmpresaMailHelp" class="form-text text-muted"><?php echo lang('EmailHelp'); ?></small>
                            </div>
                            <div class="form-group my-3 my-1-md p-2">
                                <label class="d-none d-sm-block" for="LoginEmpresaPassword"><?php echo lang('PwdInput'); ?></label>
                                <input type="password" class="form-control" id="LoginEmpresaPassword" name="LoginEmpresaPassword" placeholder="<?php echo lang('PwdInput'); ?>">
                            </div>
                            <a class="col-12" href="#"><?php echo lang('PwdRemindMe'); ?></a>
                            <div class="form-group my-3 my-1-md p-2">
                                <?php echo anchor('RegistreEmpresa/index/cat', lang('SignUp'), 'class="btn btn-primary"') ?>
                                <button type="submit" class="btn btn-primary"><?php echo lang('LogIn'); ?></button>
                            </div>
                        </form>
                    </div>
                    
                    <img id="imgLoginEmpresa" class="img-fluid" alt="<?php echo lang('TitolEmpresa'); ?>" src="<?php echo base_url('assets/own/img/empresa.jpg');?>">
                    
                </div>
            </div><!-- / empresa-->
            <div class="col-12 col-md-5 h-50 h-md-75">
               
                <div class="loginContainer" id="loginContainerAlumne">
                    <!--<button type="button" class="col-12 btn btn-primary" data-toggle="collapse" data-target="#zonaLoginAlumne">
                        <?php echo lang('TitolAlumne'); ?>
                    </button>-->
                    
                    <div class=" bg-light" id="zonaLoginAlumne">
                        <form action="<?php echo site_url('Login/LoginAlumne')?>" method="post">
                            <div class="form-group mb-3 mb-1-md p-2">
                                <label class="d-none d-sm-block" for="LoginAlumneMail"><?php echo lang('EmailInput'); ?></label>
                                <input type="email" class="form-control" name="LoginAlumneMail" id="LoginAlumneMail" aria-describedby="emailHelp" placeholder="<?php echo lang('EmailInput'); ?>">
                                <small id="LoginAlumneMailHelp" class="form-text text-muted"><?php echo lang('EmailHelp'); ?></small>
                            </div>
                            <div class="form-group my-3 my-1-md p-2">
                                <label class="d-none d-sm-block" for="LoginAlumnePassword"><?php echo lang('PwdInput'); ?></label>
                                <input type="password" class="form-control" name="LoginAlumnePassword" id="LoginAlumnePassword" placeholder="<?php echo lang('PwdInput'); ?>">
                            </div>
                            <a class="col-12" href="#"><?php echo lang('PwdRemindMe'); ?></a>
                            <div class="form-group my-3 my-1-md p-2">
                                <button type="submit" class="btn btn-primary"><?php echo lang('LogIn'); ?></button>
                            </div>
                        </form>
                    </div>
                    
                    <img id="imgLoginAlumne" class="img-fluid" alt="<?php echo lang('TitolAlumne'); ?>" src="<?php echo base_url('assets/own/img/alumne.jpg');?>">
                </div><!-- / alumne-->
            </div>
            
        </div>
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
    <script src="<?php echo base_url('assets/own/js/Login.js');?>"></script>
</body>

</html>

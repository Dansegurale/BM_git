
<header class="container-fluid">
<nav class="row navbar navbar-expand-lg navbar-dark bg-primary">
   <!-- boto toggler-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <a class="navbar-brand d-none d-sm-block" href="#">Borsa Milà</a>
    
    <div class="row bg-primary order-lg-4">
        
        <!--configuracio usuari-->
        <?php if($rol!=0){?>
        <div class="col p-0">
            <!--  modal configuracio personal -->
            <button type="button" class="btn btn-primary p-2 px-4" data-toggle="modal" data-target="#ConfiguracioUsuari"><i class="fas fa-user"></i></button>
            <!-- Modal -->
            <div class="modal fade" id="ConfiguracioUsuari" tabindex="-1" role="dialog" aria-labelledby="ConfiguracioUsuariTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ConfiguracioUsuariTitle">
                                <?php echo lang('PanellControlUsuari'); ?>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                               <?php if($rol==1){?>
                                    <p class="col-12">
                                        <?php echo lang('ContinuarRebentOfertes'); ?>
                                    </p>
                                    <div class="form-group row mx-1 my-2">
                                        <input type="radio" name="ContinuarRebentOfertes" class="col-1 form-control my-auto" id="UserConfSiContinuar" value="<?php echo lang('Si'); ?>">
                                        <label for="UserConfSiContinuar" class="col col-form-label align-middle"><?php echo lang('Si'); ?></label>
                                        <input type="radio" name="ContinuarRebentOfertes" class="col-1 form-control my-auto" id="UserConfNoContinuar" value="<?php echo lang('No'); ?>">
                                        <label for="UserConfNoContinuar" class="col col-form-label align-middle"><?php echo lang('No'); ?></label>
                                    </div>
                                <?php } ?>
                                
                                    
                                <h6>
                                    <?php echo lang('CanviContrasenya'); ?>
                                </h6>
                                <div class="form-group row mx-1 my-2">
                                    <label for="UserConfActualPwd" class="d-none d-sm-block col-sm-6 col-form-label"><?php echo lang('ContrasenyaActual'); ?></label>
                                    <input type="password" class="col-12 col-md-6 form-control" id="UserConfActualPwd" placeholder="<?php echo lang('ContrasenyaActual'); ?>">
                                </div>
                                <div class="form-group row mx-1 my-2">
                                    <label for="UserConfNewPwd" class="d-none d-sm-block col-sm-6 col-form-label"><?php echo lang('ContrasenyaNova'); ?></label>
                                    <input type="password" class="col-12 col-md-6 form-control" id="UserConfNewPwd" placeholder="<?php echo lang('ContrasenyaNova'); ?>">
                                </div>
                                <div class="form-group row mx-1 my-2">
                                    <label for="UserConfConfirmPwd" class="d-none d-sm-block col-sm-6 col-form-label"><?php echo lang('ConfirmarContrasenya'); ?></label>
                                    <input type="password" class="col-12 col-md-6 form-control" id="UserConfConfirmPwd" placeholder="<?php echo lang('ConfirmarContrasenya'); ?>">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"><?php echo lang('Aplicar'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal-->
        </div>
        <?php } ?>
        
        <!--infoAdmin-->
        <?php if($rol!=0){ ?>
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
        <?php } ?>
        
        <!--IdiomPicker-->
        <?php if($rol!=0){ ?>
        <div class="col dropdown p-0">
            <button class="btn btn-primary dropdown-toggle p-2 px-4" type="button" id="IdiomPicker" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe"></i></button>
            <div class="dropdown-menu" aria-labelledby="IdiomPicker">
                <?php echo anchor(site_url($currentControler.'/index/cat'),'<img src="'.base_url('assets/own/img/catalan.png').'" alt="catalan" style="width:40px;height:20px;">','class="dropdown-item"')?>
                <?php echo anchor(site_url($currentControler.'/index/es') ,'<img src="'.base_url('assets/own/img/spanish.png').'" alt="spanish" style="width:40px;height:20px;">','class="dropdown-item"')?>
                <?php echo anchor(site_url($currentControler.'/index/en') ,'<img src="'.base_url('assets/own/img/english.png').'" alt="english" style="width:40px;height:20px;">','class="dropdown-item"')?>
            </div>
        </div>
        <?php } ?>
        
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
        <ul class="nav nav-pills nav-fill">
            <?php
                if($rol==1){
                    $links = array("AlumnesOfertes","OfertesSubscrites");
                }else if($rol==2){
                    $links = array("GestioOfertes","AltaOfertes","RegistreEmpresa");
                }
                if($rol!=0){
                    foreach($links as $link){
                        echo '<li class="nav-item ">';
                        echo anchor(site_url($link.'/index'),$link,'class="nav-link text-light"');
                        echo '</li>';
                    }
                }
            ?>
        </ul>
    </div>
</nav>
</header>
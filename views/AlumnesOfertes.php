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
-->
    <link rel="stylesheet" href="<?php echo base_url('fontawesome/web-fonts-with-css/css/fontawesome-all.css');?>">
    <!--https://stackoverflow.com/questions/16852484/use-fieldset-legend-with-bootstrap-->
</head>

<body class="h-100 bg-dark">
    <?php 
    /*echo lang('AlumnesOfertes');
    echo $currentControler;
    exit;*/
    $this->load->view("CommonHeader");?>
    <main class="container-fluid">
       
        <section class="row">
            <div class="card w-100 rounded-bottom m-1 my-1 bg-dark">
                <div class="card-header row m-0 p-0 border-0  bg-primary" id="headingOne">
                    <div class="col-2 p-0">
                        <button class="btn btn-primary m-0 w-100" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <span class="d-none d-sm-inline">Filtres</span><i class="fa fa-filter"></i>
                        </button>
                    </div>
                    <div class="col-10 m-0 pl-3">
                        <form action="<?php echo site_url('AlumnesOfertes/showData');?>" method="post">
                            <div class="row">
                                <select class="col-10 custom-select rounded-right" id="ordenarPer" name="ordenarPer">
                                    <option value="0"selected>Ordenar per...</option>
                                    <option value="1">Mes nova</option>
                                    <option value="2">Mes antiga</option>
                                    <option value="3">Empresa A-Z</option>
                                    <option value="4">Empresa Z-A</option>
                                    <option value="5">Carrec A-Z</option>
                                    <option value="6">Carrec Z-A</option>
                                    <option value="7">Poblacio A-Z</option>
                                    <option value="8">Poblacio Z-A</option>
                                    <option value="9">Major Salari</option>
                                    <option value="10">Menor Salari</option>
                                </select>
                                <button type="submit" class="col-2 btn btn-default"><i class="fa fa-redo"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="collapseOne" class="collapse mt-2 w-100 bg-light p-0" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <form action="" class="bg-white" id="AlOfFiltres">
                            <div class="row">
                                <div class="col-12 col-md-1 form-group">
                                    <div class="form-row p-2">
                                        <label for="" class="col-12">Cursos</label>
                                        <label class="checkbox col-6 col-md-12"><input type="checkbox" value="">DAW</label>
                                        <label class="checkbox col-6 col-md-12"><input type="checkbox" value="">DAM</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2 form-group">
                                    <div class="form-row">
                                        <label for="" class="col-12">Tipus de Contracte</label>
                                        <label class="checkbox col-6 col-md-12"><input type="checkbox" value="">Temporal</label>
                                        <label class="checkbox col-6 col-md-12"><input type="checkbox" value="">Indefinit</label>
                                        <label class="checkbox col-6 col-md-12"><input type="checkbox" value="">Practiques</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 form-group">
                                    <div class="form-row my-2">
                                        <label for="" class="col-12 col-md-4">Poblacio</label>
                                        <select class="selectpicker" data-live-search="true">
                                  <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                  <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                  <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                </select>
                                    </div>
                                    <div class="form-row my-2">
                                        <label for="" class="col-12 col-md-4">Ofertes des de</label>
                                        <div class="input-group date col-12 col-md-8" data-provide="datepicker">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <div class="form-row pr-3">
                                        <label for="" class="col-12 col-md-4">Cercar paraula</label>
                                        <input type="text" class="form-control col-12 col-md-8">
                                    </div>
                                    <div class="form-row justify-content-around my-3">
                                        <button class="btn btn-primary col-5">netejar</button>
                                        <button class="btn btn-primary col-5">filtrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="row">
            
        </section>

        <section class="row">
          <table>
           <?php foreach($paginada as $row){
                echo "<tr>";
                echo "<td>".$row['data']."</td>";
                echo "<td>".$row['nom_empresa']."</td>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['localitat']."</td>";
                echo "<td>".$row['retribucio']."</td>";
                echo "<tr>";
            } ?>
           </table>
            <!--
            <?php for($i=0;$i<10;$i++){?>
  
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titol De La Oferta
                        <?php echo $i ;?>
                    </h5>
                    <p class="card-text">Aqui aniria la descripcio breu de la oferta de treball.</p>
   
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Mostrar més</button>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Titol De La Oferta</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                                </div>
                                <div class="modal-body">
                                    <section class="row">
                                        <article class="col-12 col-md-6">
                                            <img src="" alt="">
                                        </article>
                                        <article class="col-12 col-md-6">
                                            <div class="row">
                                                <h6 class="col-12">
                                                    Lloc de treball:
                                                </h6>
                                                <p class="col-12">
                                                    Cap de departament
                                                </p>
                                                <h6 class="col-12">
                                                    Tipus de contracte:
                                                </h6>
                                                <p class="col-12">
                                                    Indefinit
                                                </p>
                                                <h6 class="col-4">
                                                    Salari:
                                                </h6>
                                                <p class="col">
                                                    2000€
                                                </p>
                                            </div>
                                        </article>
                                        <article class="col-12">
                                            <h6>Poblacio:</h6>
                                            <p>Nom de la poblacio</p>
                                            <h6>Lloc de treball:</h6>
                                            <p>Cap de departament</p>
                                            <p>
                                                Aqui aniria la descripcio completa de la oferta de treball.Aqui aniria la descripcio completa de la oferta de treball.Aqui aniria la descripcio completa de la oferta de treball.Aqui aniria la descripcio completa de la oferta de treball.Aqui aniria la descripcio completa de la oferta de treball.
                                            </p>
                                        </article>
                                    </section>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary">Destacar</button>
                                    <button type="button" class="btn btn-primary">Contactar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <?php } ?>
            -->

        </section>
    </main>
    <!-- /main.container-fluid -->
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

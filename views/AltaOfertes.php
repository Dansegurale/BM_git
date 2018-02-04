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
    <style>
    fieldset.scheduler-border {
    border: solid 2px #007bff !important;
    padding: 0px 0px 0px 10px;
    border-bottom: none;
}

legend.scheduler-border {
    width: auto !important;
    border: none;
    font-size: 14px;
}
    </style>
</head>

<body class="h-100 bg-dark">
    <?php $this->load->view("CommonHeader");?>
    <main class="container-fluid mt-3">
        <section class="row p-2">
            <fieldset class="col-12 scheduler-border bg-light">
                <legend class="scheduler-border">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#AlOfFiltres" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-filter text-right"> Filtres</i>
                    </button>
                </legend>
                <div class="row">
                    
                </div>
                <form action="" class="bg-white my-2 py-2 collapse" id="AlOfFiltres">
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
            </fieldset>
        </section>
        <section class="row p-2">
            <div class="card-group">

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Titol De La Oferta</h5>
        <p class="card-text">Aqui aniria la descripcio breu de la oferta de treball.</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Mostrar més</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Titol De La Oferta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button><!-- cruz para cerrar-->
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
        <!--/ Modal -->
    </div>
</div>
 

            </div>
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
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
        table{
            overflow-x: scroll;
        }
    </style>
</head>

<body class="h-100 bg-light">
    
    <main>
        <!--<table class="table">
           <caption>Ejemplo de queri sin paginacion</caption>
            <tr> <th>codi</th> <th>nom</th> </tr>
            <?php
                foreach ($info as $row){
                 echo "<tr> <td>".$row['codi']."</td><td>".$row['nom']."</td></tr>";   
                }
            ?>
        </table>-->
        
        <div class="table-responsive">
            <table class="table">
            <caption>Ejemplo con paginacion</caption>
            <tr>
                <th>codi</th><th>nom</th>
            </tr>
            <?php
                foreach ($paginada as $row){
                 echo "<tr> <td>".$row['codi']."</td><td>".$row['nom']."</td></tr>";   
                }
            ?>
        </table>
        </div>
        <?php echo $this->pagination->create_links(); ?>
        
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
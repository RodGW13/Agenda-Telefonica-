<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado Cargos</title>
    </head>
    <body>
       

        <?php include "MenuAd.php"; ?>

          <center>
             <h2>Listado Cargos Funcionarios</h2>
             <br>
          </center>
        <div class="table-responsive">
              <table class="table table-bordered table-hover">
            <tr>
                <td><strong>Cargo</strong></td>
                            
                
            </tr>
            <?php
                //while($r=  mysqli_fetch_array($reg)){
            ?>
            <tr>
                <td><?php //echo utf8_encode($r[0]) ?></td>        
            </tr>
                <?php //} ?>
        </table>
        <br>
    </div>
    </body>
</html>

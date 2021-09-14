<!--https://www.devschannel.com/latex/beamer-->

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8" http-equiv="refresh" content="5; url=cabecalho.php">
      <meta name="viewport" content="width=device-width" initial-scale=1>
      <!--link rel="stylesheet" href="bootstrap-grid.min.css">
      <link rel="stylesheet" href="bootstrap.min.css">
      <link rel="stylesheet" href="estilos.css">
      <link rel="sortcut icon" href="imagens/favicon.png" type="image/x-icon" /-->
          <style type="text/css">
          .imagem img{
              width: 700px;
              height:220px;
              padding-left: 0px;
              padding-right: 0px;
              border: 0px solid red;
            }
        </style>

    </head>        
    <body background="#000">
        <?php
        $rand = (string) rand(1,89);
        // var_dump($rand);
        $image_rand = "imagens/bg(".$rand.").jpg";
        ?>

        <center>
        <table border="0">
            <tr>
            <td>
                <div class="imagem">
                    <a href="<?php echo $image_rand; ?>" target="_blank"> <img src="<?php echo $image_rand; ?>" /></a>
                </div>
            </td>
          </tr> 
        </table>
      </center>
    </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" http-equiv="refresh" content="20; url=motos.php">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <link rel="stylesheet" href="bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="sortcut icon" href="imagens/favicon.png" type="image/x-icon" />

    <title> Egmon Pereira - Motos Estradeiras</title>
    <style type="text/css">
        .imagem img{
            width:100%;
            height:220px;
            padding-left: 5px;
            padding-right: 5px;
            border: 0px solid red;
        }
      body  {
            background-image: url('imagens/bg21.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: white;
          }
    </style>
  </head>
  <body>

    <?php
     $rand = (string) rand(1,115);
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
            <p>
            <center>
              <div class="corpo">
                <div class="container">
                    <a target="_blank" href="https://www.motoscustom.com.br"><img width="25%" src="imagens/motocustom.png"></a>
                    <a target="_blank" href="https://www.sfmotos.com.br"><img width="25%" src="imagens/sfmotos.png"></a>
                    <a target="_self" href="index.php"><img width="25%" src="imagens/inicio3.png"></a>
                </div>
              </div>
            </center>
            </p>
          </td>
        </tr> 
      </table>
    </center>
  </body>
</html>

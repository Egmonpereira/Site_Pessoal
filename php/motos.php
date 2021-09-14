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
              width:600px;
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
              <p>
                <center>
                  <div class="corpo">
                    <p align="left">
                      <img width="80" src="imagens/motocustomasas.png">
                      <a target="_self" href="biblias.php"><img width="50" src="imagens/LogoReformada.png"></a>
                      <a target="_self" href="academicos.php"><img width="50" src="imagens/capelo.png"></a>
                      <a target="_self" href="google.php"><img width="50" src="imagens/google.png"></a>
                      <a target="_self" href="roteadores.php"><img width="50" src="imagens/circulomaior1.png"></a>
                      <a href="index.php" target="_self"><img width="50" src="imagens/inicio3.png"></a>
                    </p>
                    <div class="container">
                      <a target="_blank" href="https://www.motoscustom.com.br"><img width="30%" src="imagens/motocustom.png"></a>
                      <a target="_blank" href="https://www.sfmotos.com.br"><img width="30%" src="imagens/sfmotos.png"></a>
                      <!--a target="_self" href="index.php"><img width="25%" src="imagens/inicio3.png"></a-->
                    </div>
                  </div>
                </center>
              </p>
            </td>
          </tr> 
        </table>
      </center>
      <center>
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="info.html" width="300px" height="30px"></iframe>
      </center>
    </body>
  </html>

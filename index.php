<!--https://www.devschannel.com/latex/beamer-->

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8" http-equiv="refresh" content="20; url=index.php">
      <meta name="viewport" content="width=device-width" initial-scale=1>
      <link rel="stylesheet" href="bootstrap-grid.min.css">
      <link rel="stylesheet" href="bootstrap.min.css">
      <link rel="stylesheet" href="estilos.css">
      <link rel="sortcut icon" href="imagens/favicon.png" type="image/x-icon" />
      <title> Egmon Pereira </title>
      <style type="text/css">
          .imagem img{
              width:100%;
              height:220px;
              padding-left: 5px;
              padding-right: 5px;
              border: 0px solid red;
          }
        body  {
              background-image: url('imagens/bg23.png');
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
              <p align="left">
                <center>
                    <iframe name="menu" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="menu.html" width="100%" height="80px"></iframe>
                    <iframe name="pagina" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="inicio.html" width="100%" height="300px"></iframe>
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="info.html" width="300px" height="30px"></iframe>
                </center>
              </p>
            </td>
          </tr> 
        </table>
      </center>
    </body>
  </html>

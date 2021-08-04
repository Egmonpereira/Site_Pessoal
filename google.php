<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" http-equiv="refresh" content="20; url=google.php">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <link rel="stylesheet" href="bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="sortcut icon" href="imagens/favicon.png" type="image/x-icon" />  
    <title>Egmon Pereira - Google</title>
    <style type="text/css">
        .imagem img{
          width:100%;
            height:220px;
            padding-left: 5px;
            padding-right: 5px;
            border: 0px solid red;
        }
    body  {
            background-image: url('imagens/bg20.jpg');
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
                <p align="left">
                  <img width="80" src="imagens/google.png">
                  <a target="_self" href="biblias.php"><img width="50" src="imagens/LogoReformada.png"></a>
                  <a target="_self" href="academicos.php"><img width="50" src="imagens/capelo.png"></a>
                  <a target="_self" href="roteadores.php"><img width="50" src="imagens/circulomaior1.png"></a>
                  <a href="index.php" target="_self"><img width="50" src="imagens/inicio3.png"></a>
                  <a target="_self" href="motos.php"><img width="50" src="imagens/motocustomasas.png"></a>
                </p>
                  <div class="container">
                    <a target="_blank" href="https://calendar.google.com/calendar/r?tab=ic"><img width="25%" src="imagens/agenda.png"></a>
                    <a target="_blank" href="http://www.gmail.com"><img width="25%" src="imagens/gmail.png"></a>
                    <a target="_blank" href="https://www.google.com/maps"><img width="25%" src="imagens/maps.png"></a>
                    <a target="_blank" href="https://photos.google.com"><img width="25%" src="imagens/photos.png"></a>
                    <a target="_blank" href="https://jamboard.google.com/"><img width="25%" src="imagens/jamboard.png"></a>
                    <a target="_blank" href="https://www.google.com/travel/"><img width="25%" src="imagens/viagens.png"></a>
                    <a target="_blank" href="https://podcasts.google.com"><img width="25%" src="imagens/one.png"></a>
                    <a target="_blank" href="https://podcasts.google.com"><img width="25%" src="imagens/podcast.png"></a>
                    <a target="_blank" href="https://books.google.com.br/"><img width="25%" src="imagens/livros.png"></a>
                  </div>

                  <div class="container">
                    <a target="_blank" href="https://music.youtube.com/"><img width="25%" src="imagens/youtubemusic.png"></a>
                    <a target="_blank" href="https://www.blogger.com"><img width="25%" src="imagens/blogger.png"></a>
                    <a target="_blank" href="https://keep.google.com/u/0/"><img width="25%" src="imagens/keep.png"></a>
                    <a target="_blank" href="https://mail.google.com/chat/u/0/#chat/welcome"><img width="25%" src="imagens/hangouts.png"></a>
                    <a target="_blank" href="https://translate.google.com"><img width="25%" src="imagens/translate.png"></a>
                    <a target="_blank" href="https://contacts.google.com"><img width="25%" src="imagens/contatos.png"></a>
                    <a target="_blank" href="https://drive.google.com/drive/my-drive"><img width="25%" src="imagens/googledrive.png"></a>
                    <a target="_blank" href="https://app.diagrams.net"><img width="25%" src="imagens/diagramas.png"></a>
                    <a target="_blank" href="https://artsandculture.google.com/"><img width="25%" src="imagens/google_Arts.png"></a>
                  </div>

                <div class="container">
                  <a target="_blank" href="https://docs.google.com/document/u/0/"><img width="25%" src="imagens/docs.png"></a>
                  <a target="_blank" href="https://docs.google.com/forms/u/0/"><img width="25%" src="imagens/formularios.png"></a>
                  <a target="_blank" href="https://docs.google.com/presentation/u/0/"><img width="25%" src="imagens/slides.png"></a>
                  <a target="_blank" href="https://docs.google.com/spreadsheets/u/0/"><img width="25%" src="imagens/sheet.png"></a>
                  <a target="_blank" href="https://www.google.com.br/save"><img width="25%" src="imagens/colecoes.png"></a>
                  <a target="_blank" href="https://www.google.com/business/"><img width="25%" src="imagens/mybusiness.png"></a>
                  <a target="_blank" href="https://earth.google.com/web/"><img width="25%" src="imagens/google-earth.png"></a>
                  <a target="_blank" href="https://www.google.com/chrome/"><img width="25%" src="imagens/chrome.png"></a>
                  <a target="_blank" href="https://duo.google.com/"><img width="25%" src="imagens/duo.png"></a>
                </div>

                <div class="container">
                  <a target="_blank" href="https://www.google.com.br/shopping"><img width="25%" src="imagens/shopping.png"></a>
                  <a target="_blank" href="https://classroom.google.com/h"><img width="25%" src="imagens/classroom.png"></a>
                  <a target="_blank" href="https://ads.google.com/home/"><img width="25%" src="imagens/ads.png"></a>
                  <a target="_blank" href="https://meet.google.com/"><img width="25%" src="imagens/meet.png"></a>
                  <a target="_blank" href="https://news.google.com/topstories"><img width="25%" src="imagens/noticias.png"></a>
                  <a target="_blank" href="https://play.google.com/store"><img width="25%" src="imagens/playstore.png"></a>
                  <a target="_blank" href="https://texviewer.herokuapp.com"><img width="25%" src="imagens/tex.png"></a>
                  <!--a href="index.php" target="_self"><img width="25%" src="imagens/inicio3.png"></a-->
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

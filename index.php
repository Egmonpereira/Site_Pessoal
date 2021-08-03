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
                <img width="80" src="imagens/inicio3.png">
                </p>
                <div class="container">
                  <a target="_blank" href="https://twitter.com/egmon"><img width="30%" src="imagens/twitter.png"></a>
                  <a target="_blank" href="https://www.instagram.com/egmonpereira"><img width="30%" src="imagens/instagram1.png"></a>
                  <a target="_blank" href="https://vk.com/feed"><img width="30%" src="imagens/vk.png"></a>
                  <a target="_blank" href="https://www.facebook.com/"><img width="30%" src="imagens/facebook.png"></a>
                  <a target="_blank" href="https://web.skype.com"><img width="30%" src="imagens/skype.png"></a>
                  <a target="_blank" href="https://web.whatsapp.com"><img width="30%" src="imagens/whatsapp.png"></a>
                  <a target="_blank" href="https://www.youtube.com"><img width="30%" src="imagens/youtube.png"></a>
                  <a target="_blank" href="https://br.pinterest.com"><img width="30%" src="imagens/pintereste.png"></a>
                  <a target="_self" href="motos.php"><img width="30%" src="imagens/motocustomasas.png"></a>
                </div>

                <div class="container">
                  <a target="_blank" href="https://www.disneyplus.com/"><img width="30%" src="imagens/Disney.png"></a>
                  <a target="_blank" href="https://www.primevideo.com"><img width="30%" src="imagens/primevideo.png"></a>
                  <a target="_blank" href="https://www.netflix.com/browse"><img width="30%" src="imagens/netflix.png"></a>
                  <a target="_blank" href="https://music.youtube.com/"><img width="30%" src="imagens/youtubemusic.png"></a>
                  <a target="_blank" href="https://music.amazon.com.br/"><img width="30%" src="imagens/amazonmusic.png"></a>
                  <a target="_blank" href="https://www.spotify.com/br/"><img width="30%" src="imagens/spotify.png"></a>
                  <a target="_blank" href="https://www.deezer.com/br/"><img width="30%" src="imagens/deezer.png"></a>
                  <a target="_blank" href="https://music.yandex.com"><img width="30%" src="imagens/YandexMusic.png"></a>
                  <a target="_blank" href="https://chordify.net/"><img width="30%" src="imagens/chordify.png"></a>
                </div>
        
                <div class="container">
                  <a target="_blank" href="https://disk.yandex.com"><img width="30%" src="imagens/yandexLogo.png"></a>
                  <a target="_blank" href="https://mega.nz"><img width="30%" src="imagens/mega.png"></a>
                  <a target="_blank" href="https://www.onedrive.com"><img width="30%" src="imagens/onedrive.png"></a>
                  <a target="_blank" href="https://www.dropbox.com"><img width="30%" src="imagens/dropbox.png"></a>
                  <a target="_blank" href="https://www.asuswebstorage.com"><img width="30%" src="imagens/asuswebstorage.png"></a>
                  <a target="_blank" href="https://drive.google.com/drive/my-drive"><img width="30%" src="imagens/googledrive.png"></a>
                  <a target="_blank" href="https://parler.com/#/user/Egmont"><img width="30%" src="imagens/parler.png"></a>
                  <a target="_blank" href="https://gettr.com/user/egmon/"><img width="30%" src="imagens/gettr.png"></a>
                  <a target="_self" href="google.php"><img width="30%" src="imagens/google.png"></a>
                  <!--a target="_blank" href="https://aiming.pro/"><img width="30%" src="imagens/aiming.png"></a-->
                </div>

                <div class="container">
                  <a target="_blank" href="https://trello.com/login"><img width="30%" src="imagens/trello.png"></a>
                  <a target="_blank" href="https://user-zmodo.meshare.com/user/login"><img width="30%" src="imagens/zmodo.png"></a>
                  <a target="_blank" href="https://convertio.co/pt/"><img width="30%" src="imagens/convertio.png"></a>
                  <a target="_blank" href="https://web.telegram.org/"><img width="30%" src="imagens/telegram.png"></a>
                  <a target="_blank" href="https://slack.com/intl/pt-br"><img width="30%" src="imagens/slack.png"></a>
                  <a target="_self" href="biblias.php"><img width="30%" src="imagens/LogoReformada.png"></a>
                  <a target="_self" href="academicos.php"><img width="30%" src="imagens/capelo.png"></a>
                  <a target="_self" href="roteadores.php"><img width="30%" src="imagens/circulomaior1.png"></a>
                  <a target="_blank" href="http://www.egmon.com.br"><img width="30%" src="imagens/meusite.png"></a>
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

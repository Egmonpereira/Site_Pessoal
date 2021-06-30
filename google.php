<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8" http-equiv="refresh" content="20; url=google.php">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="sortcut icon" href="imagens/favicon.png" type="image/x-icon" />;    
    <title>Egmon Pereira - Google</title>
    <style type="text/css">
        .imagem img{
          width:100%;
            height:220px;
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
   <!--caption><font face="Arial" size="+3" color="green"><b>Egmon - Página pessoal</b></font></caption-->
  <tr>
  <td>
  <center>
    <div class="imagem">

    <!--a href="imagens/bg(6).jpg" target="_blank"> <img src="imagens/bg(6).jpg" /></a></div-->
     <!--a target="_blank" href="http://www.egmon.net/"><img width="610"  height="170" src="bg01.jpeg"><br-->
    <!--img width="610"  height="170" src="javascript:banners();"><br-->
    <a href="<?php echo $image_rand; ?>" target="_blank"> <img src="<?php echo $image_rand; ?>" /></a>
  </div>

  <div class="container">
    <a target="_blank" href="https://calendar.google.com/calendar/r?tab=ic"><img width="80" src="imagens/agenda.png"></a>
    <a target="_blank" href="https://mail.google.com/chat/u/0/#chat/welcome"><img width="80" src="imagens/hangouts.png"></a>
    <a target="_blank" href="http://www.gmail.com"><img width="80" src="imagens/gmail.png"></a>
    <a target="_blank" href="https://www.google.com/maps"><img width="80" src="imagens/maps.png"></a>
    <a target="_blank" href="https://photos.google.com"><img width="80" src="imagens/photos.png"></a>
    <a target="_blank" href="https://jamboard.google.com/"><img width="80" src="imagens/jamboard.png"></a>
  </div>

  <div class="container">
    <a target="_blank" href="https://music.youtube.com/"><img width="70" src="imagens/youtubemusic.png"></a>
    <a target="_blank" href="https://www.blogger.com"><img width="70" src="imagens/blogger.png"></a>
    <a target="_blank" href="https://keep.google.com/u/0/"><img width="70" src="imagens/keep.png"></a>
    <a target="_blank" href="https://translate.google.com"><img width="70" src="imagens/translate.png"></a>
    <a target="_blank" href="https://contacts.google.com"><img width="75" src="imagens/contatos.png"></a>
    <a target="_blank" href="https://drive.google.com/drive/my-drive"><img width="70" src="imagens/googledrive.png"></a>
    <a href="index.php" target="_self"><img width="70" src="imagens/inicio3.png"></a>
  </div>
   </center>
  </div>
  </td>
  </tr>
 </table>
 </center>

 </body>
 </html>

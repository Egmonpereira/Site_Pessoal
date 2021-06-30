<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8" http-equiv="refresh" content="20; url=biblias.php">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <link rel="sortcut icon" href="imagens/favicon.png" type="image/x-icon" />;    
    <title> Egmon Pereira </title>
    <style type="text/css">
        .imagem img{
            width:55%;
            height:220px;
        }
    body  {
            background-image: url('imagens/bg24.jpg');
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

    <!--a href="imagens/bg(11).jpg" target="_blank"> <img src="imagens/bg(11).jpg" /></a></div-->
    <a href="<?php echo $image_rand; ?>" target="_blank"> <img src="<?php echo $image_rand; ?>" /></a></div>

    <!--BÍBLIAS-->
    <a href="http://www.biblia.com.br/" target="_blank"><img width="80" src="imagens/bibliapontocom.png"></a>
    <a href="http://www.bible.is/PORJFA/1Kgs/3/D" target="_blank"><img width="80" src="imagens/bibleis.png"></a>
    <a href="https://www.bibliaonline.com.br/" target="_blank"><img width="80" src="imagens/bibliaonline.png"></a>
    <a href="https://bibliaportugues.com" target="_blank"><img width="80" src="imagens/bibliaestudo.png"></a>
    <a href="http://www.bibliaemail.com/pt/pviva/biblia/form_leitura.bm" target="_blank"><img width="80" src="imagens/bibliamail.png"></a>
    <a href="https://www.bible.com/pt/" target="_blank"><img width="80" src="imagens/yourversion.png"></a>
    <a href="http://www.bibliaon.com/" target="_blank"><img width="80" src="imagens/biblieon.png"></a>
<br />
    <a href="https://biblia.sbb.org.br/biblia/" target="_blank"><img width="80" src="imagens/sbb.png"></a>
    
    <!--OUTROS-->
    <a href="https://www.facebook.com/supremagraca" target="_blank"><img width="80" src="imagens/supremagraca.png"></a>
    <a href="http://ultimato.com.br/sites/estudos-biblicos/" target="_blank"><img width="80" src="imagens/ultimato.png"></a>
    <a href="https://www.souigreja.com.br/" target="_blank"><img width="80" src="imagens/souigreja.png"></a>
    <a href="https://reformados21.com.br/" target="_blank"><img width="80" src="imagens/reformados21.png"></a>
    <a href="https://encontrogenesis.com.br/" target="_blank"><img width="80" src="imagens/encontrogenesis.png"></a>
    <a target="_blank" href="http://www.ipcentral.com.br"><img width="70" src="imagens/Central.png"></a>
    <a target="_blank" href="http://www.prva.com.br"><img width="70" src="imagens/prva.png"></a>
<br />
    <a href="https://coalizaopeloevangelho.org/" target="_blank"><img width="80" src="imagens/TGC.png"></a>

    <a href="http://www.celulas.com.br/" target="_blank"><img width="80" src="imagens/celulas.png"></a>
    <a href="http://novocantico.com.br/" target="_blank"><img width="80" src="imagens/hnc.png"></a>
    <a href="https://www.ipb.org.br/" target="_blank"><img width="80" src="imagens/ipb.png"></a>
    <a href="https://santoevangelho.com.br/" target="_blank"><img width="80" src="imagens/institutosantoevangelho.png"></a>
    <a href="http://www.monergismo.net.br/" target="_blank"><img width="80" src="imagens/monergismo1.png"></a>
    <a href="index.php" target="_self"><img width="80" src="imagens/inicio3.png"></a>
   </center>
  </div>
  </td>
  </tr>
 </table>
 </center>
<!--div align="right">
</p-->
 </body>
 </html>

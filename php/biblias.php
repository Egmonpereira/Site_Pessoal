<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8" http-equiv="refresh" content="20; url=biblias.php">
      <meta name="viewport" content="width=device-width" initial-scale=1>
      <link rel="stylesheet" href="bootstrap-grid.min.css">
      <link rel="stylesheet" href="bootstrap.min.css">
      <link rel="stylesheet" href="estilos.css">
      <link rel="sortcut icon" href="imagens/favicon.png" type="image/x-icon" />
      <title> Egmon Pereira - Bíblias</title>
      <style type="text/css">
        .imagem img{
          width:100%;
          height:220px;
          padding-left: 5px;
          padding-right: 5px;
          border: 0px solid red;
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
                      <img width="80" src="imagens/LogoReformada.png">
                      <a href="index.php" target="_self"><img width="50" src="imagens/inicio3.png"></a>
                      <a target="_self" href="academicos.php"><img width="50" src="imagens/capelo.png"></a>
                      <a target="_self" href="roteadores.php"><img width="50" src="imagens/circulomaior1.png"></a>
                      <a target="_self" href="google.php"><img width="50" src="imagens/google.png"></a>
                      <a target="_self" href="motos.php"><img width="50" src="imagens/motocustomasas.png"></a>
                    </p>
                    <div class="container">
                      <a href="http://www.biblia.com.br/" target="_blank"><img width="30%" src="imagens/bibliapontocom.png"></a>
                      <a href="http://www.bible.is/PORJFA/1Kgs/3/D" target="_blank"><img width="30%" src="imagens/bibleis.png"></a>
                      <a href="https://www.bibliaonline.com.br/" target="_blank"><img width="30%" src="imagens/bibliaonline.png"></a>
                      <a href="https://bibliaportugues.com" target="_blank"><img width="30%" src="imagens/bibliaestudo.png"></a>
                      <a href="http://www.bibliaemail.com/pt/pviva/biblia/form_leitura.bm" target="_blank"><img width="30%" src="imagens/bibliamail.png"></a>
                      <a href="https://www.bible.com/pt/" target="_blank"><img width="30%" src="imagens/yourversion.png"></a>
                      <a href="http://www.bibliaon.com/" target="_blank"><img width="30%" src="imagens/biblieon.png"></a>
                      <a href="https://biblia.sbb.org.br/biblia/" target="_blank"><img width="30%" src="imagens/sbb.png"></a>
                      <a href="https://www.facebook.com/supremagraca" target="_blank"><img width="30%" src="imagens/supremagraca.png"></a>
                    </div>

                    <div class="container">
                      <a href="http://ultimato.com.br/sites/estudos-biblicos/" target="_blank"><img width="30%" src="imagens/ultimato.png"></a>
                      <a href="https://www.souigreja.com.br/" target="_blank"><img width="30%" src="imagens/souigreja.png"></a>
                      <a href="https://reformados21.com.br/" target="_blank"><img width="30%" src="imagens/reformados21.png"></a>
                      <a href="https://encontrogenesis.com.br/" target="_blank"><img width="30%" src="imagens/encontrogenesis.png"></a>
                      <a target="_blank" href="http://www.ipcentral.com.br"><img width="30%" src="imagens/Central.png"></a>
                      <a target="_blank" href="http://www.prva.com.br"><img width="30%" src="imagens/prva.png"></a>
                      <a href="https://coalizaopeloevangelho.org/" target="_blank"><img width="30%" src="imagens/TGC.png"></a>
                      <a href="http://www.celulas.com.br/" target="_blank"><img width="30%" src="imagens/celulas.png"></a>
                      <a href="http://novocantico.com.br/" target="_blank"><img width="30%" src="imagens/hnc.png"></a>
                    </div>

                    <div class="container">
                      <a href="https://www.ipb.org.br/" target="_blank"><img width="30%" src="imagens/ipb.png"></a>
                      <a href="https://santoevangelho.com.br/" target="_blank"><img width="30%" src="imagens/institutosantoevangelho.png"></a>
                      <a href="http://www.monergismo.net.br/" target="_blank"><img width="30%" src="imagens/monergismo1.png"></a>
                      <!--a href="index.php" target="_self"><img width="30%" src="imagens/inicio3.png"></a-->
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
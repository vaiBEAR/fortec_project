<!DOCTYPE html>
<html>
<head>
        <title>Produme</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="javascript/index.js">
        <style>
            #section1 {padding-top:50px;height:500px;color: #fff;background-color: black;}
        </style>
        
</head>
        <body>

        <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#">Produme Sobre</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="index.php">Sobre</a></li>
                    <li><a href="produtos/produtos.php">Produtos</a></li>                   
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
    </section>
    <div style="height:1000px">

        </br>
        </br>

    <div class="container">
            <h1 class="bigh">Quem nós somos</h1>


        <style>
            .bigh
            {
                font-size: 450%;
            }
            .bigp
            {
                font-size: 200%;
            }
        </style>
</br></br>

        <p class="bigp">Nós somos um grupo de estudantes da escola Fortec com o intuito de preservar a saúde dos gamers, pois jogar de forma inadequada tem como consequencia
                 adquirir problemas de saúde, portanto nesse site você vai encontrar várias dicas e produtos á venda relacionados à saúde.
        </p>
            </br>
          <p class="bigp">
          Você deve estar se perguntando se nós somos uma loja ou uma apoiadora. Por que apenas deixamos links e informações de produtos ?
          Bom...Nos considere as pessoas que facilitam a sua compra, lhe dando mais confiança, lhe mostrando a verdade, se vale a pena ou não é oque queremos mostrar.

          </p>
          </br>
            <p class="bigp">
            Nosso propósito aqui é apoiar as indústrias que apoiam a saúde de gamers ou pessoas que trabalham usando o computador. Não preciso nem falar que ficar muito tempo
            no computador faz mal...Né?
            </p>
            </br>
            </br>

         <center>
              <button type="button" class="btn btn-success" data-toggle="collapse" data-target=#demo>
            <p class="bigp"> ..... </p>
             </button> 
       

                     <div id="demo" class="collapse">
                     <p class="bigp">
                        Preste atenção nos produtos, pois há códigos de desconto em alguns.
                        </p>
                     </div>
           </center>
          


    </div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>


        <div id="section1" class="container-fluid">
                <!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTATO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Nos contate e responderemos em 24 horas.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> São Paulo, Brasil</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>produmevirtualshop@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Assunto" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-success pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>
        </div>    
           

        </body>
</html>
<script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>        

    
<!DOCTYPE html>
    <html lang="pt br">
                <head>
                        <title>Produme Loja</title>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                        <link rel="stylesheet" href="../css/produto.css">
                        <link rel="stylesheet" href="../javascript/produto.js">
                        <style>
            #section1 {padding-top:50px;height:500px;color: #fff;background-color: black;}
        </style>
                        <?php

                        include("mysql/conexao.php");
                        $adm = new ADM;
                        $adm->conectar();

                        ?>
   
                </head>
        <body>

        <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="produtos.php">Produme Loja</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="../index.php">Sobre</a></li>
                    <li><a href="#">Produtos</a></li>
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


    
        <div id="section1" class="container-fluid">
        </div>
        
        <form action="/action_page.php">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
</div>
      </div>
</br>
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">HeadSet Cloud Core Hyper X R$ 555,00</div>
        <div class="panel-body"><img src="../images/headset_hx.jpg" class="img-responsive" style="width:78%" alt="Image"></div>
        <div class="panel-footer">Para um jogador experiente um bom headset é algo essencial que não deve ser ignorado.</div>
      </div>
      </div>

      <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Cadeira Zermatt Conforsit NEW 4912 R$749,90</div>
        <div class="panel-body"><img src="../images/cadeira_branca.jpg" class="img-responsive" style="width:58%" alt="Image"></div>
        <div class="panel-footer">Gamers sofrem com dores por todo o corpo, sendo mais frequentemente vista na coluna e pescoço.</div>
      </div>
      </div>

      <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">MousePad Suzaku Speed Extra Grande R$ 64,90</div>
        <div class="panel-body"><img src="../images/mousepad_redragon.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Há cada vez mais casos de gamers itensos que por jogarem muito e fazer movimentos apenas com o pulso acabam adquirindo tendinite.</div>
      </div>
    </div>
    </div>
</div>


                


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
      
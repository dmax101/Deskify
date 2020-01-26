<!DOCTYPE html>
<html style="scroll-behavior: smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="./default/theme.css">
  <link rel="icon" href="./img/fav.png">
</head>

<body>
  <?php include 'sections/nav.php';?>
  <div id="main" class="py-5 align-items-center d-flex bg-primary h-100 text-left" style="	background-image: url(img/home_hero.jpg);	background-size: cover;	background-position: center;	background-repeat: no-repeat;">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="row">
            <div class="col-md-12"><img class="img-fluid d-block float-left" src="img/deskify_logo.svg"></div>
          </div>
          <hr>
          <h1 class="text-primary"> O secretariado remoto pode ajudar você a focar nos problemas da sua empresa </h1><a class="btn btn-primary" href="#cartela">Saiba mais</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center text-light bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Seu sucesso é o que nos move.</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5" style="	background-image: linear-gradient(to bottom, #E8B79D, #F5D17D);	background-position: top left;	background-size: 100%;	background-repeat: repeat;" id="cartela">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h1 class="mb-3">O que podemos fazer por você</h1>
          <p contenteditable="true">Mussum Ipsum, cacilds vidis litro abertis. Cevadis im ampola pa arma uma pindureta.
            Diuretics paradis num copo é motivis de denguis. Aenean aliquam molestie leo, vitae iaculis nisl.
            Casamentiss faiz malandris se pirulitá.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src="img/card-img-01.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Facilitar processos</h4>
              <p class="card-text">Precisa se organizar? Podemos te ajudar a gerenciar seu tempo, otimizar a organização
                de trabalho da sua empresa, gerenciar seus e-mails e seus arquivos digitais e te lembrar de todos os
                prazos e compromissos importantes.<br></p> <a href="#" class="btn btn-outline-primary text-left">+ saiba
                mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src="img/card-img-02.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Conectar pessoas</h4>
              <p class="card-text">Precisa prospectar? Realizar cobranças? Orçar serviços ou compras? Estreitar relações
                nas redes sociais? Organizar um evento? A partir de um script construído com você, nós fazemos
                isso!<br><br></p> <a href="#" class="btn btn-outline-primary">+ saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src="img/card-img-03.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Processar informações</h4>
              <p class="card-text">Precisa de uma pesquisa? Preparar ou revisar um documento administrativo? Atualizar
                cadastros? Fazer o follow-up de uma reunião? Passa pra gente!<br><br><br></p> <a href="#" class="btn btn-outline-primary">+ saiba mais</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-3">
        <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src="img/card-img-04.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Controlar recursos</h4>
              <p class="card-text">Dificuldade em controlar as contas a pagar e receber? Nós organizamos o fluxo de
                caixa pra você!<br><br><br><br></p> <a href="#" class="btn btn-outline-primary">+ saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src="img/card-img-05.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Construir parcerias</h4>
              <p class="card-text">Queremos nos colocar à sua disposição para qualquer dor de cabeça. Precisando, chama
                a gente! Mesmo se não estiver ao nosso alcance resolver o seu problema, nós te ajudamos a encontrar o
                profissional certo para a sua demanda, ok?</p> <a href="#" class="btn btn-outline-primary">+ saiba
                mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
  <div class="py-3 text-center" id="contato" style="	background-image: url(img/bkgnd-contato.png);	background-position: center;	background-size: cover;	background-repeat: no-repeat;">
    <div class="container">
      <div class="row">
        <div class="mx-auto p-4 col-lg-7">
          <h1 class="mb-4">Contato</h1>
          <?php



          // define variables and set to empty values
          $nameErr = $emailErr = $subjectErr = $messageErr = "";
          $name = $email = $subject = $message = $response = "";
          $flag = false;

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Nome é requerido!";
            } else {
              $name = test_input($_POST["name"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Somente letras e espaços brancos são permitidos!";
              }
            }

            if (empty($_POST["email"])) {
              $emailErr = "Email é requerido!";
            } else {
              $email = test_input($_POST["email"]);
              // check if e-mail address is well-formed
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Formato de e-mail inválido!";
              }
            }

            if (empty($_POST['subject'])) {
              $subjectErr = "Assunto é requerido!";
            } else {
              $subject = test_input($_POST['subject']);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z ]*$/", $subject)) {
                $subjectErr = "Somente letras e espaços brancos são permitidos!";
              }
            }

            if (empty($_POST['message'])) {
              $messageErr = "Mensagem é requerida!";
            } else {
              $message = test_input($_POST['message']);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z ]*$/", $message)) {
                $messageErr = "Somente letras e espaços brancos são permitidos!";
              }
            }

            if ($flag) {
              $response = "Não foi possível enviar!";
            } else {
              
              $to = "deskifysecretariadoremoto@gmail.com";
              $sub = $subject;

              $txt = $message;


              // More headers
              $headers .= 'From: <' . $_POST['email'] . '>' . "\r\n";

              mail($to,$sub,$txt,$headers);

            }
          }

          function test_input($data)
          {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          ?>

          <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-row">
              <div class="form-group col-md-6"> <input type="text" class="form-control" id="nome" placeholder="Nome" name="name"> </div>
              <div class="form-group col-md-6"> <input type="email" class="form-control" id="email" placeholder="Email" name="email"> </div>
            </div>
            <div class="form-group"> <input type="text" class="form-control" id="assunto" placeholder="Assunto" name="subject"> </div>
            <div class="form-group"> <textarea class="form-control" id="form30" rows="3" placeholder="Sua mensagem" name="message"></textarea> </div> <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
            <p class="text-danger"><br><?php echo $nameErr; ?> <?php echo $emailErr; ?> <?php echo $subjectErr; ?> <?php echo $messageErr; ?></p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include 'sections/footer.php';?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
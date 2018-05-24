<!DOCTYPE html>
<html lang="pt_BR">
<title>
    Quero ver! - Sobre
</title>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./images/facao.png" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./toasty/toasty.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  </head>

  <body>
      
    <header class="cabecalho">
        <figure class="figure">
            <img class="figure-img img-fluid rounded" src="./images/querover.png" alt="logotipo">
        </figure>
    </header>
      
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" id="toasty-button" href="#">Quero Ver!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add-meme.php">Postar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="head-football.php">Head Football</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Sobre</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br/>
  <div class="about-content">
    Site para fins acadêmicos desenvolvido pela equipe com os seguintes integrantes:
    <ul>
      <li>Gabriel Angelo Dragoni <a>87230</a></li>
      <li>Victor Koschel <a>72946</a></li>
      <li>Leonardo Leite <a>87839</a></li>
    </ul>
  </div>
  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="./toasty/jquery.toasty.js"></script>
  <script>
      $(document).ready( function(){
          $("body").toasty();
          $("#toasty-button").click( function(){
               $("body").toasty('pop');
          });
      });
  </script>
  </body>

</html>
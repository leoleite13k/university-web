<?php 
    require "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>
    Quero ver!
</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./images/facao.png" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="./toasty/toasty.css" />
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
            <li class="nav-item active">
              <a class="nav-link" id="toasty-button" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add-meme.php">Postar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="head-football.php">Head Football</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Sobre</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Vai descendo
            <small> devagarinho</small>
          </h1>
        <?php
            session_start();
            $postsBanco = buscarPosts();
            
            function date_compare($a, $b){
                $t1 = strtotime($a['data']);
                $t2 = strtotime($b['data']);
                return $t2 - $t1;
            }    
            usort($postsBanco, 'date_compare');

            $post = "
            <div class='card mb-4'>
              <h2 class='card-title'>[POST-TITLE]</h2>
              <img class='card-img-top' src='[POST-IMAGE]' alt='Card image cap'>
              <div class='card-body'>
                <p class='card-text'>[POST-MESSAGE]</p>
              </div>
              <div class='card-footer text-muted'>
                [POST-DATE]
              </div>
            </div>";
            foreach($postsBanco as $item){
                $currentPost = $post;
                $currentPost = str_replace("[POST-IMAGE]", './posts/'.$item['arquivo'], $currentPost);
                $currentPost = str_replace("[POST-TITLE]", $item['titulo'], $currentPost);
                $currentPost = str_replace("[POST-MESSAGE]", $item['mensagem'], $currentPost);
                $currentPost = str_replace("[POST-DATE]", date('d/m/Y H:i:s', strtotime($item['data'])), $currentPost);
                echo $currentPost;
            }
        ?>
            
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            
          <!-- Search Widget -->
          <div class="card my-4">
                <h5 class="card-header">Buscar</h5>
                <div class="card-body">
                  <div class="input-group">
                    <form action="index.php" method="get">
                        <input type="text" name="pesquisa" class="form-control" placeholder="Escreve aí...">
                        <span class="input-group-btn">                  
                            <input class="btn btn-secondary" type="submit"  value="Bora!"> 
                        </span>  
                    </form>
                  </div>
                </div>
          </div>
            
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">É Facão</h5>
            <div class="card-body">
              Blog de memes da Engenharia de Computação.
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    
    <footer data-spy="scroll" data-target="#menu_navbar" data-offset="0">
        <p id="rodape" style="text-align: center;"></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
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

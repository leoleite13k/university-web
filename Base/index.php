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
              <a class="nav-link" id="toasty-button" href="#">Home
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
          /***************************************************************************************************/
          /* JAPONEIS é aqui que vc vai mexer, pegar a carga do banco e transformar nesses objetos da $lista */
          /***************************************************************************************************/
            $lista = [
                    (object)[
                    'title' => 'Post da coruja ',
                    'date' => "11/12/2017",
                    'message' => 'Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Casamentiss faiz malandris se pirulitá. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Detraxit consequat et quo num tendi nada.',
                    'image' => 'https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/68dd54ca-60cf-4ef7-898b-26d7cbe48ec7/10-dithering-opt.jpg',
                    ],
                    (object)[
                    'title' => 'Segundo post top',
                    'date' => "11/12/2017",
                    'message' => 'Mussum Ipsum, cacilds vidis litro abertis. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Suco de cevadiss deixa as pessoas mais interessantis. Quem manda na minha terra sou euzis! Viva Forevis aptent taciti sociosqu ad litora torquent.',
                    'image' => 'https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/68dd54ca-60cf-4ef7-898b-26d7cbe48ec7/10-dithering-opt.jpg',
                    ],
                    (object)[
                    'title' => 'fsdf gdsdg ',
                    'date' => "11/12/2017",
                    'message' => 'Mussum Ipsum, cacilds vidis litro abertis. Atirei o pau no gatis, per gatis num morreus. Manduma pindureta quium dia nois paga. Vehicula non. Ut sed ex eros. Vivamus sit amet nibh non tellus tristique interdum. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.',
                    'image' => 'https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/68dd54ca-60cf-4ef7-898b-26d7cbe48ec7/10-dithering-opt.jpg',
                    ],
                    (object)[
                    'title' => 'Zeldinha top (Imagem em base 64)',
                    'date' => "11/12/2017",
                    'message' => 'Mussum Ipsum, cacilds vidis litro abertis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Manduma pindureta quium dia nois paga.',
                    'image' => 'https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/68dd54ca-60cf-4ef7-898b-26d7cbe48ec7/10-dithering-opt.jpg',
                    ],
                    (object)[
                    'title' => 'Ultimo Post',
                    'date' => "11/12/2017",
                    'message' => 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss deixa as pessoas mais interessantis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Mé faiz elementum girarzis, nisi eros vermeio.',
                    'image' => 'https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/68dd54ca-60cf-4ef7-898b-26d7cbe48ec7/10-dithering-opt.jpg',
                    ],
                ];

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
            foreach($lista as $index => $item){
                $currentPost = $post;
                $currentPost = str_replace("[POST-IMAGE]", $item->image, $currentPost);
                $currentPost = str_replace("[POST-TITLE]", $item->title, $currentPost);
                $currentPost = str_replace("[POST-MESSAGE]", $item->message, $currentPost);
                $currentPost = str_replace("[POST-DATE]", $item->date, $currentPost);
                echo $currentPost;
            }
        ?>

          <!-- Pagination -->
          <!-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul> -->

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Buscar</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Escreve aí...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Bora!</button>
                </span>
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

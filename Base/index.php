<?php 
   
    require "funcoes.php";
    require "database.php";

?>
<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>

<body>

    <header class="cabecalho">
        <figure class="figure">
            <img class="figure-img img-fluid rounded" src="https://picsum.photos/4016/800?image=901" alt="logotipo">
        </figure>
    </header>

    <nav id="menu_navbar" class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Ação1</a>
                        <a class="dropdown-item" href="#">Ação 2</a>
                        <a class="dropdown-item" href="#">Ação 3</a>
                        <a class="dropdown-item" href="#rodape">Rodapé</a>
                    </div>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0" method="get" action="pagina3.php">
                <input id="pesq" name="pesq" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button id="pesquisa" class="btn btn-outline-success my-2 my-sm-0 fas fa-search" type="submit"></button>
            </form>          
        </div>
    </nav>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm" <?php  if(login()){ echo "hidden";}   ?>>
                <form class="clrbox" method="post" action="index.php">
                    <label style="padding:3px;">Usuário</label>
                    <input name="usuario" class="form-control" type="text" placeholder="Login" required>
                    <label style="padding:3px;">Senha</label>
                    <input name="senha" class="form-control" type="password" required placeholder="Password">
                    <br>
                    <button class="btn btn-success" type="submit">Enviar</button>
                    <button class="btn btn-secondary" type="reset">Limpar</button>
                </form>
            </div>
        <div>    
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Cadastra-se agora !!!</button>
        </div>
            
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Novo Cadastro</h4>   
                    </div>
                    
                    <div class="modal-body">
                        <form id="formExemplo" data-toggle="validator" role="formulario" method="post" action="#">
                            <div class="form-group">
                                <label for="textNome" class="control-label"> *Nome</label>
                                <input name="cadUsuario" id="textNome" class="from-control" placeholder="Digite o seu nome..." required>
                            <div class="form-group">
                                <label for="inputEmail" class="control-label"> *Email</label>
                                <input name="email" id="inputEmail" class="from-control" placeholder="Digite o seu email..." type="email">
                            </div>

                            <div class="form-group">
                                <label for="inputPassword" class="control-label"> *Senha</label>
                                <input name="cadSenha" id="inputPassword" class="from-control" placeholder="Digite o sua senha..." type="password" required>
                            </div> 
                            <div class="form-group">
                                <label for="inputConfirmPassword" class="control-label"> *Confirme a senha</label>
                                <input name="confirmaSenha" id="inputConfirmPassword" class="from-control" placeholder="Digite o sua senha novamente..." type="password" required>
                                </div>
                                
                                <button name="criacad" type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                        <br>                                                   
                        <div class="alert alert-danger">
                            <strong>*</strong> Campos Obrigatorios
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" type="button" data-dismiss ="modal">Close</button>                            
                        </div>
                    </div>
                </div>        
            </div>
                    
            
            
            <?php
                cadastra();
            ?>
        </div>
        
        
        
        <?php 
              if(login()){
                                            
                include "cadastraItem.php";
                                            
                }
                                      
        ?>
            <div class="col-sm" <?php  if(login()){ echo "hidden";}   ?>>
                <article class="clrbox">
                    <section>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.</p>
                    </section>
                </article>
            </div>
            <div class="col-sm">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://picsum.photos/800x400?image=1060" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://picsum.photos/800x400?image=1064" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://picsum.photos/800x400?image=1063" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <footer data-spy="scroll" data-target="#menu_navbar" data-offset="0">

        <p id="rodape" style="text-align: center;">Criado por mim</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script>
       $(document).ready(function(){
           $('[data-toggle="tooltip"]').tooltip();
       });
    </script>
    
    
    
</body>

</html>

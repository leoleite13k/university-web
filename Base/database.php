<?php 
  
function conectar(){
    
    $server = "localhost:3307";
    $user = "root";
    $password = "";
    $db = "webdb";
    
    $conecta = mysqli_connect($server,$user,$password,$db);
    
    return $conecta;
}

function consulta(){
    
    $conecta = conectar();
    
    if($conecta){
        
        $pesquisa = "SELECT * FROM usuarios;";
        
        $consulta = mysqli_query($conecta,$pesquisa);
        
        return $consulta;

    }else{
        
        die("Não foi possivel conectar!!!" . mysqli_connect_errno());   
    }
}


function cadastra() {
    
    if(isset($_POST['criacad'])) {
        if(isset($_POST['cadUsuario']) && isset($_POST['cadSenha'])) {
            
            $user = $_POST['cadUsuario'];
            $password = $_POST['cadSenha'];
        } 
        else {    
            return;
        }
        
        $conecta = conectar();
        
        if($conecta) {
            $sql = "INSERT INTO usuarios(USERNAME,PASSWORD) VALUES('$user','$passwd');";
            
            $cadastro = mysqli_query($conecta,$sql);
            
            if($cadastro){
                echo "<script>
                            alert('Usuario {$user} cadastrado com sucesso!!!');
                      </script>";
            }
            else {
                $erro = mysqli_connect_errno();
                echo "<script> 
                            alert('Falaha no cadastro' + {$error}');                
                      </script>";
            }
        }
        else {
            return false;
        }
    }
    else {
        return;
    }
}

?>
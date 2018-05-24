<?php 

function conectar(){
    
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "querover";
    
    $conecta = mysqli_connect($server, $user, $password, $db);
    
    if (mysqli_connect_errno($conecta)) {
            die("Não foi possivel conectar!!!" . mysqli_connect_errno()); 
        }
    
    return $conecta;
}

function consulta(){
    
    $conecta = conectar();
    
    if($conecta){
        
        $pesquisa = "SELECT * FROM postar;";
        
        $consulta = mysqli_query($conecta,$pesquisa);
        
        return $consulta;

    }else{
        
        die("Não foi possivel conectar!!!" . mysqli_connect_errno());   
    }
}


function criarPost($titulo, $mensagem) {
    
    if(isset($_POST['titulo'])) {
        if(isset($_POST['mensagem'])) {
            
            $titulo   = $_POST['titulo'];
            $mensagem = $_POST['mensagem'];
        } 
        else {    
            return;
        }
        
        $conecta = conectar();
        
        if($conecta && isset($_FILES['arquivo'])) {
                
            $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
            $novo_nome = md5(time()) . $extensao;
            $diretorio = "posts/";
            
            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
            
            $criaPost = "INSERT INTO postar(idPost,titulo,mensagem,arquivo,data) VALUES (null, '$titulo','$mensagem','$novo_nome',NOW())";
            
            $cadastro = mysqli_query($conecta,$criaPost);
  
            if($cadastro){
                echo "<script>
                            alert('Meme {$titulo} enviado com sucesso!!!');
                            location.href='index.php';
                      </script>";
            }
            else {
                $erro = mysqli_connect_errno();
                echo "<script> 
                            alert('Falha ao enviar Meme ' + '{$erro}');                
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
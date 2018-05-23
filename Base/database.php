<?php 

$dia = strftime('%d');
$mes = strftime('%m');
$ano = strftime('%G');

$hora    = strftime('%H');
$minuto  = strftime('%M');
$segundo = strftime('%S');


$data = $dia . "/" . $mes . "/" . $ano;
$tempo = $hora . ":" . $minuto . ":" . $segundo;

function conectar(){
    
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "querover";
    
    $conecta = mysqli_connect($server,$user,$password,$db);
    
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


function gravar() {
    
    if(isset($_POST['titulo'])) {
        if(isset($_POST['mensagem']) && isset($_POST['arquivo'])) {
            
            $titulo = $_POST['titulo'];
            $mensagem = $_POST['mensagem'];
            $arquivo = $_POST['arquivo'];
        } 
        else {    
            return;
        }
        
        $conecta = conectar();
        
        if($conecta) {
            $sql = "INSERT INTO postar(titulo,mensagem,arquivo) VALUES('$titulo','$mensagem','$arquivo','$data','$tempo');";
            
            $cadastro = mysqli_query($conecta,$sql);
            
            if($cadastro){
                echo "<script>
                            alert('Meme {$titulo} enviado com sucesso!!!');
                      </script>";
            }
            else {
                $erro = mysqli_connect_errno();
                echo "<script> 
                            alert('Falha ao enviar Meme' + {$error}');                
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
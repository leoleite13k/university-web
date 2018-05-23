<?php 
date_default_timezone_set('Etc/GMT+3');
setlocale(LC_TIME, "pt_BR");

$dia = strftime('%d');
$mes = strftime('%m');
$ano = strftime('%G');

$hora    = strftime('%H');
$minuto  = strftime('%M');
$segundo = strftime('%S');


$data = $dia . "/" . $mes . "/" . $ano;
$tempo = $hora . ":" . $minuto . ":" . $segundo;

 function postar(){
            if(isset($_POST['titulo']) && isset($_POST['mensagem'])  && isset($_POST['arquivo'])){
                
                $titulo   = $_POST['titulo'];
                $mensagem = $_POST['mensagem'];
                $arquivo  = $_POST['arquivo'];
  
            }else {
                
                return;
                
            }
         
         $conecta = conectar();
     
     if($conecta){
         
         $row = mysqli_fetch_row(consulta());
         
         if(($titulo == $row[2]) && ($mensagem == $row[3]) && ($arquivo == $row[4]) && ($data == $row[5]) && ($tempo == $row[6])){
             
             return true;
         }else{
             
             return false;
         }
         
         
     }else{
         
         die("Falha na conexão!!! " . mysqli_connect_errno());
         
     }
 }
     
?>
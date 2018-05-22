<?php 
   
      $pesq = $_GET["pesq"];

       echo "<script>
                  alert('$pesq');
             </script> ";

       $redirect = "http://localhost/AulasWeb/index.php";
  
        header("refresh:10, url=$redirect");


?>
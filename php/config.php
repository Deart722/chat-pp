
<!-- Este es el archivo que nos permite conectarnos  y establecer la conexion a  la base de datos -->
<?php
  $hostname = "localhost"; 
  $username = "root";
  $password = "accesodatos";
  $dbname = "chat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error(); // esta funcion imprime por pantalla el posible error que se halla podido dar en la ejecucion del script
  }
?>

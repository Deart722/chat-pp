
<!-- es la etiqueta que permite ejecutar codigo php en un documentos html-->

<?php 
  //comprueba si existe una session de usuario 

  session_start();
  //si existe, comprobamos con la funcion isset() si es null la id de sesion
  // si no es null lo que hace es almacenar en la variable session el valor de la unique id 
  if(isset($_SESSION['unique_id'])){
    //tras haber guardado la unique_id , la funcion header lo que hace es redirigirte a la url/directorio/archivo que se le pase por parametro a la variable location
    header("location: users.php");
  }
?>


<!--Esta funcion hace la misma funcion que un import de un paquete con la diferencia de que coje el valor de las variables la estructura etc..-->
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
                    <!--Lo que va a hacer el formulario es colocar datos que se introduzcan en el formulario en el servidor de php -->
                                      
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>  <!-- Para controlar los diversos errores que se puedan producir a lo largo de la ejecucion-->
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>


  <!-- Hace referencia al codigo de javascript que se encuentra en scr-->
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>

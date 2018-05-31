<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Research_site</title>
    
  </head>

  <body>
    
          <form action="registrar_usuario.php" method="post" class="" onsubmit="return validar();">
            <h2 class="subtitulo">Iniciar sesión</h2>  
          
              <input type="text" id="usuario" name="usuario" maxlength="15" placeholder="&#128272; Usuario" autofocus required>
              <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
              <input type="password" id="clave" name="clave" maxlength="20" placeholder="&#128272; clave" autofocus required>
           
              <input type="submit" value="Aceptar" class="btn btn-danger" id="boton">

              <p>¿No te has registrado? <a href="index.php">Ingresa aquí</a></p>  

          </form>

    <footer>

        <p>Copyright &copy; Your Website 2018</p>
      
    </footer>

  </body>

</html>

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
              <h2 class="subtitulo">Registrarse</h2>
    
                <input type="text" id="nombres" name="nombres" maxlength="30" placeholder="Nombres" autofocus required>
      
                <input type="text" id="apellidos" name="apellidos" maxlength="80" placeholder="Apellidos" autofocus required>
                        
                <input type="text" id="identificacion" name="identificacion" maxlength="80" placeholder="Identificacion" autofocus required>

                <input type="email" id="correo" name="correo" maxlength="100" placeholder="E-mail" autofocus class="input-48" required>

                <input type="text" id="usuario" name="usuario" maxlength="15" placeholder="Usuario" autofocus required>
      
                <input type="password" id="clave" name="clave" maxlength="20" placeholder="Contraseña" autofocus required>

                
      
                <input type="submit" value="Aceptar"> <br/>
        
                  <p>¿Ya tienes cuenta? <a href="login.php">Ingresa aquí</a></p>
            </form>     
          
    <footer>
      
        <p>Copyright &copy; Your Website 2018</p>
      
    </footer>

  </body>

</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>metodo get</title>
  </head>
  <body>

      <form  method="get">
          Nombre: <input type="text" name="nombre"><br><br>
          Email: <input type="text" name="email"><br><br>
          <input type="submit" value="Enviar">
      </form>
      <br>

<?php

         echo "El nombre es: " .$_GET['nombre'],"<br/>","<br/>";

         echo "Su email recibido es: " .$_GET['email'];
      ?>

  </body>
</html>

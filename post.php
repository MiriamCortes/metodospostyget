<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>metodo post</title>
  </head>
  <body>

    <form  method="POST">
    <p>Nombre : <input type="text" name="name"></p>
    <p>Email: <input type="text" name="email"></p>
    <input type="submit">
    </form>

    <br>
    <br>

    Hola: <?php isset($_POST["name"]) ? print $_POST["name"] : ""; ?><br><br>
    Tu email es: <?php isset($_POST["email"]) ? print $_POST["email"] : ""; ?>


  </body>
</html>

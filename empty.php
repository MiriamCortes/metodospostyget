<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>empty</title>
  </head>
  <body>
    <?php
    $var = 0;

// Se evalúa a true ya que $var está vacia
if (empty($var)) {
    echo '$var es o bien 0, vacía, o no se encuentra definida en absoluto <br/><br/>';
}

// Se evalúa como true ya que $var está definida
if (isset($var)) {
    echo '$var está definida a pesar que está vacía';
}
     ?>

  </body>
</html>

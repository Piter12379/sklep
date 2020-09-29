<?php
  include('code.php');
  poczatek_sesji();
?>
<!doctype html>
<html>
  <head>
    <title>SKLEP</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1>Sklep internetowy</h1>
    <p><a href="spis.php">Książki</a></p>
    <br />
    <form action="index.php" method="post">
      <input type="submit" name="pusty_koszyk"  value="Pusty koszyk" />
      <input type="submit" name="pokaz_koszyk"  value="Pokaż koszyk" />
    </form>
    <?php
      pusty_koszyk();
      pokaz_koszyk();
    ?>
  </body>
</html>

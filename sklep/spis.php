<?php
  include('code.php');
  poczatek_sesji();
  ?>
<html>
  <head>
    <title>SKLEP</title>
    <meta charset="utf-8">
  </head>
  <body>
  <h1>Książki</h1>
  <p><a href="index.php">Strona Główna</a></p>
  <br/>
  <form action="spis.php" method="post">
    <p>
      <label><input type="checkbox" name="towary[]" value="<?php echo name("name","1"); ?>">
      <?php echo name("name","1"); ?><br>
      </label>
      , cena <input type="text" name="cena0"  readonly value="<?php echo name("net_price","1"); ?>" style="width:30px;" />
      , ilość <input type="text" name="ile0" style="width:30px;" />
    </p>
    <p>
      <label><input type="checkbox" name="towary[]" value="<?php echo name("name","2"); ?>">
      <?php echo name("name","2"); ?><br>
      </label>
      , cena  <input type="text" name="cena1" readonly value="<?php echo name("net_price","2"); ?>" style="width:30px;" />
      , ilość <input type="text" name="ile1" style="width:30px;" />
    </p>
    <p>
      <label><input type="checkbox" name="towary[]" value="<?php echo name("name","3"); ?>">
      <?php echo name("name","3"); ?><br>
      </label>
      , cena  <input type="text" name="cena2" readonly value="<?php echo name("net_price","3"); ?>" style="width:30px;" />
      , ilość <input type="text" name="ile2"  style="width:30px;" />
    </p>
    <p>
      <label><input type="checkbox" name="towary[]" value="<?php echo name("name","4"); ?>">
      <?php echo name("name","4"); ?><br>
      </label>
      , cena <input type="text" name="cena3" readonly value="<?php echo name("net_price","4"); ?>" style="width:30px;" />
      , ilość <input type="text" name="ile3" style="width:30px;" />
    </p>

    <input type="submit" name="do_koszyka"  value="Do koszyka" />
    <input type="submit" name="pusty_koszyk"  value="Pusty koszyk" />
    <input type="submit" name="pokaz_koszyk"  value="Pokaż koszyk" />
  </form>
  <?php
    do_koszyka(true);
    pusty_koszyk();
    pokaz_koszyk();
  ?>
</body>
</html>

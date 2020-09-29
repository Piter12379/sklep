<?php



 function name($arg,$val){
  $conn = mysqli_connect("localhost","root","","sklep");
  $db_select = mysqli_select_db($conn, "sklep");
  if (!$db_select) {
    die("Database selection failed: " . mysqli_error($conn));
  }
  mysqli_set_charset($conn, "utf-8");

  /* wypisuje czy baza została podłączona
  if(!$conn) die("Connection failed!");
    print "Connected successfully";
    */

  $sql = "select $arg from products where id='$val'";
  $result = mysqli_query($conn, $sql);

  while($wiersz=mysqli_fetch_array($result)){
    print $wiersz[0];
  }
}

  function poczatek_sesji()
  {
    @session_start();
    if (!isset($_SESSION['koszyk']))
    {
      $_SESSION['koszyk']=array('spis'=>array());
    }
  }

  function do_koszyka($spis)
  {
    if (!isset($_POST['do_koszyka'])) return;
    if (count($_POST['towary'])===0) return;
    $towary=$_POST['towary'];
    foreach($towary as $towar)
    {
      $id=(int)($towar);
      $klucz_cena='cena'.$id;
      $klucz_ilosc='ile'.$id;
      if ($spis)
      {
        $count=count($_SESSION['koszyk']['spis']);
        $_SESSION['koszyk']['spis'][$count]['opis']=$towar;
        $_SESSION['koszyk']['spis'][$count]['cena']=$_POST[$klucz_cena];
        $_SESSION['koszyk']['spis'][$count]['ilosc']=$_POST[$klucz_ilosc];
      }
    }
  }
  function pokaz_koszyk()
  {
    if (!isset($_POST['pokaz_koszyk'])) return;
    $spis=$_SESSION['koszyk']['spis'];

    echo '<br />';
    if (count($spis)===0) {
      echo 'Koszyk jest pusty!';
      return;
    }

    $suma=0;
    if (count($spis)>0)
    {
      echo 'Książki:<br />';
      for($k=0;$k<count($spis);$k++)
      {
        $suma+=$spis[$k]['cena']*$spis[$k]['ilosc'];
        echo ($k+1).'. '.$spis[$k]['opis'].', cena: '
            .$spis[$k]['cena'].', ilość: '.$spis[$k]['ilosc'].'<br />'."\n";
      }
    }
    echo '<br />Wartość towarów w koszyku: '.$suma;
}
function pusty_koszyk()
{
  if (!isset($_POST['pusty_koszyk'])) return;
  $_SESSION['koszyk']['spis']=array();
  echo '<br />Koszyk jest pusty!';
}

?>

<center>
<form action="Tos.php" method="POST">
<input type="number" name="angka1" size="2";> *
<input type="number" name="angka2" size="2";>
<input type="submit" value="proses" name="hitung";>
</form>
  


<?php
 if(isset($_POST['hitung'])){
  $angka1=$_POST['angka1'];
  $angka2=$_POST['angka2'];
  $hasil=$angka1 * $angka2;
  echo $hasil;
}
?>
</center>
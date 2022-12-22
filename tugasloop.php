<form action="http://localhost/belajar/tugasloop.php" method="GET">
 <label>masukan angka ajaib:</label><br>
 <input type="text" name="nilai"><br>
  <input type="submit" value="kirim">
</form>
<?php

$input = $_GET ['nilai'];

echo "input = $input<br/>";

for ($x = 1; $x <=50; $x++) {
	for ($y = 1; $y <= $x; $y++) {
		echo "$x ";
	}
echo "<br>";
}
?>  

		
<?php
	if($_POST){
		$sayi1 = $_POST["sayi1"];
		$sayi1 = $_POST["sayi2"];
		
		echo $sayi1+$sayi2;
		}

?>
<form action="" method="post">
<input type="number" name="sayi1"/><br>
<input type="number" name="sayi2"/><br>
<select name="">
	<option value="+">Toplama</option>
    <option value="-">Çıkartma</option>
    <option value="*">Çarpma</option>
    <option value="/">Bölme</option>
</select>
<input type="submit" value="Hesapla!"/>
</form>
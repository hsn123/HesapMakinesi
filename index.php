<?php
	if($_POST){
		$sayi1 = $_POST["sayi1"];
		$sayi2 = $_POST["sayi2"];
		$islem = $_POST["islem"];
		
		if($islem == "+"){
			echo $sayi1+$sayi2;}
		elseif($islem == "-"){
			echo $sayi1-$sayi2;}
		elseif($islem == "*"){
			echo $sayi1*$sayi2;}
		elseif($islem == "/"){
			echo $sayi1/$sayi2;}
	}
?>
<form action="" method="post">
<input type="text" name="sayi1"/><br>
<input type="text" name="sayi2"/><br>
<select name="islem">
	<option value="+">Toplama</option>
    <option value="-">Çıkartma</option>
    <option value="*">Çarpma</option>
    <option value="/">Bölme</option>
</select>
<input type="submit" value="Hesapla!"/>
</form>
<html>
<body background="duvar.jpg">
<link rel="stylesheet" href="index.css" />
<div align="center" id="div1"> <br/>
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
	    elseif($islem == "floor"){
			echo floor($sayi1/$sayi2);}
	}
?>
 
<br/> 
<br/>
<br/>
<center>
<form action="" method="post">
<input id="sayi1" type="text" name="sayi1"/><br><br/>
<input id="sayi2" type="text" name="sayi2"/><br><br/>
<select name="islem">
	<option id="topla" value="+">Toplama</option>
    <option id="cıkart" value="-">Çıkartma</option>
    <option id="carp" value="*">Çarpma</option>
    <option id="bol" value="/">Bölme</option>
    <option id="kare" value="floor">yüzdesini al</option>
  
</select>
<input id="btn" type="submit" value="Hesapla!"/>
</form>
</center>
</div>
</body>
</html>
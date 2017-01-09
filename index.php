<html>
<body  background="3123.jpg" >
<?php
session_start();
$hata="";
if(isset($_POST["kaydet"])){
$eksikvarmi = 0;

if(!isset($_POST["kulad"])) $eksikvarmi = 1;
if(!isset($_POST["pass"])) $eksikvarmi = 1;
if(!isset($_POST["isim"])) $eksikvarmi = 1;
if(!isset($_POST["Email"])) $eksikvarmi = 1;
if(!isset($_POST["soyisim"])) $eksikvarmi = 1;


$baglanti = new PDO("mysql:dbname=test;host=localhost","root","");
$sorgu = $baglanti->query("SELECT id FROM kullanici WHERE kulad='" . $_POST["kulad"] ."'",PDO::FETCH_ASSOC);
if($sorgu->rowCount())
{
	$hata = "Daha Önceden Böyle Bi Kullanıcı Kayıt Yapmış";
}
else{
	$komut = $baglanti->prepare("INSERT INTO kullanici (kulad,md5sifre,email,isim,soyisim) VALUES (?,?,?,?,?)");
	$komut->execute(array($_POST["kulad"],md5($_POST["pass"]),$_POST["Email"],$_POST["isim"],$_POST["soyisim"]));
}

}
if($hata != "") echo "<hr>". $hata. "<hr>";
?>
<center>
ÜYE OLMAK İÇİN DOLDURUNUZ
</center>
<center>
<form method="post" >
<center>
 kullanıcı ad <br>
 <input id="kulad" name="kulad" type="text" placeholder="Kullanici"/><br>
 şifreniz  <br>   
  <input id="pass" name="pass" type="password" placeholder="şifre"/><br>
 tekrar şifre<br>
 <input id="repass" name="repass" type="password" placeholder="şifre Tekrar"/><br>
 adınız <br>
 <input id="isim" name="isim" type="text" placeholder="İsim"/><br>
 soyadınız <br>
 <input id="soyisim" name="soyisim" type="text" placeholder="Soy İsim"/><br>
 email adresiniz <br>
 <input id="Email" name="Email" type="email" placeholder="Email"/><br>
 </center>
 <input type="submit"  name="kaydet">
</form>
</center>

<hr>

<?php
if(isset($_POST["giris"])){
	$baglanti = new PDO("mysql:dbname=test;host=localhost","root","");
	$komut = $baglanti->query("SELECT md5sifre FROM kullanici WHERE kulad='" . $_POST["kulad"] ."'");
	$sorgu = $komut->fetch(PDO::FETCH_ASSOC);
	
	if(count($sorgu)>0){
	if ($sorgu["md5sifre"] == md5($_POST["pass"])){
		include("girissayfasi.php");
		header('refresh:0;'.' url=girissayfasi.php');
	echo "<br>Hoşgeldin<br>";
	}
	else{
	$hata = "Şifre Yanlış";
	}
}
else{
	$hata = "kullanici Bulunamadı";
}
}
if($hata != "") echo "<hr>". $hata. "<hr>";
?>
<center>
<form method="post">
  <p>&nbsp;</p>
  <table width="281" border="1" bgcolor="#00FF00">
    <tr>
      <td width="97">kullanıcı adı : </td>
      <td width="144"><input id="kulad" name="kulad" type="text" placeholder="Kullanici"/></td>
    </tr>
    <tr>
      <td>şifre : </td>
      <td><input id="pass" name="pass" type="password" placeholder="şifre"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit"  name="giris" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</center>

</body>
</html>
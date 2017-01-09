<link href="css.css" rel="stylesheet" type="text/css" />
<html>
<head>
<style>
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 300px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 300px;
    height: 200px;
}

div.desc {
    padding: 5px;
    text-align: center;
}
</style>
</head>
<body background="arka.jpg">
<center>
<div class="deneme" id="deneme" >
<center>
<form id="form1" name="form1" method="post" action="">
      <table width="200" border="1">
        <tr>
          <td><input type="submit" name="bmw" id="bmw" value="bmw" /></td>
          <td><input type="submit" name="nissan" id="nissan" value="nissan" /></td>
          <td><input type="submit" name="mercedes" id="mercedes" value="mercedes" /></td>
          <td><input type="submit" name="honda" id="honda" value="honda" /></td>
          <td><input type="submit" name="audi" id="audi" value="audi" /></td>
        </tr>
      </table>
    </form>
    <center>
</div>
</center>
  <?php
if(isset($_POST["bmw"]))
{
	$dizindekidosyalar = scandir("bmw/");
	$ekle = array_slice($dizindekidosyalar,2);
	shuffle($ekle);
	for($i=0;$i<count($ekle);$i++){		
		echo '<div class="img">';
		echo '<a target="_blank" href="bmw'.$ekle[$i].'">';
		echo '<img src="bmw/'.$ekle[$i].'" alt="'.$ekle[$i].'" width="300" height="200">';
		echo '</a>';
		echo '</div>';
		}		
}

if(isset($_POST["audi"]))
{
	$dizindekidosyalar = scandir("audi/");
	$ekle = array_slice($dizindekidosyalar,2);
	shuffle($ekle);
	for($i=0;$i<count($ekle);$i++){		
		echo '<div class="img">';
		echo '<a target="_blank" href="audi'.$ekle[$i].'">';
		echo '<img src="audi/'.$ekle[$i].'" alt="'.$ekle[$i].'" width="300" height="200">';
		echo '</a>';
		echo '</div>';
		}		
}
if(isset($_POST["honda"]))
{
	$dizindekidosyalar = scandir("honda/");
	$ekle = array_slice($dizindekidosyalar,2);
	shuffle($ekle);
	for($i=0;$i<count($ekle);$i++){		
		echo '<div class="img">';
		echo '<a target="_blank" href="honda'.$ekle[$i].'">';
		echo '<img src="honda/'.$ekle[$i].'" alt="'.$ekle[$i].'" width="300" height="200">';
		echo '</a>';
		echo '</div>';
		}		
}
if(isset($_POST["mercedes"]))
{
	$dizindekidosyalar = scandir("mercedes/");
	$ekle = array_slice($dizindekidosyalar,2);
	shuffle($ekle);
	for($i=0;$i<count($ekle);$i++){		
		echo '<div class="img">';
		echo '<a target="_blank" href="mercedes'.$ekle[$i].'">';
		echo '<img src="mercedes/'.$ekle[$i].'" alt="'.$ekle[$i].'" width="300" height="200">';
		echo '</a>';
		echo '</div>';
		}		
}
if(isset($_POST["nissan"]))
{
	$dizindekidosyalar = scandir("nissan/");
	$ekle = array_slice($dizindekidosyalar,2);
	shuffle($ekle);
	for($i=0;$i<count($ekle);$i++){		
		echo '<div class="img">';
		echo '<a target="_blank" href="nissan'.$ekle[$i].'">';
		echo '<img src="nissan/'.$ekle[$i].'" alt="'.$ekle[$i].'" width="300" height="200">';
		echo '</a>';
		echo '</div>';
		}		
}

?>
  
    
  

</body>
</html>
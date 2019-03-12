<html>
<head>
<title>Calclatour</title>
</head>

<body background="image.jpg">
<div align="center">
<form >
<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>
<input type="text" name="n1" placeholder="First Number">
<input type="text" name="n2" placeholder="Second Number">
<br>
<br>
<br>
<select name="op">
<option>Add</option>
<option>Subtract</option>
<option>Multiply</option>
<option>Divide</option>


</select>
<br>
<br>
<br>
<button name="b" type="submit" value="submit">Calculate</button>
</form>
</div><div align="center">
<p>The answer is:	</p>
<?php
 if(isset($_GET['b'])){
	
	 $res1 = $_GET['n1'];
	 $res2 = $_GET['n2'];
	 $operator = $_GET['op'];
	 if($operator == "Add"){
		 echo $res1 + $res2;
	 }else if($operator == "Subtract"){
		 echo $res1 - $res2;
	 }elseif($operator == "Multiply"){
		 echo $res1 * $res2;
	 }elseif($operator == "Divide"){
		 echo $res1 / $res2;
	 }
 }


?>
</div>
</body>

</html>
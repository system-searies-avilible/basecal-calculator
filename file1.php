

<!doctype html>
<html>
<head> 

<title>Basecal table</title>

</head>

<body>



<form method="post" >
<table border="2">
<tr>
<th>Enter power number :</th>
<td><input type="number" name="txtpow" ></td>
</tr>

<tr>
<th>Enter value number :</th>
<td><input type="number" name="txtval" ></td>
</tr>

<tr>
<td><input type="submit" name="btn_sub" value="calculate" ></td>
</tr>
</table>

</form>


</body>
</html>

<?php
if(isset($_POST['btn_sub'])){
$pow=$_POST['txtpow'];
$val=$_POST['txtval'];
$result=1;
for($i=1; $i<=$pow; $i++){
	echo"$val x ";
	$result=$result*$val;
}
	echo" = $result";
}
?>
<DOCTYPE HTML>
<html>
<head></head>
<body>


<form action= "c.php" method="post">

<br>
<?php

echo "<select name= 'month'>";
// a full textual rep of a month such as jan and mar
$current_month= date('F');

for ($i=1;$i<=12;$i++){
	//return the unix timestamp for date
	$month=date("F",mktime(0,0,0,$i,1,date("Y")));
	
	if($current_month == $month){
 echo"<option value='$month'selected='selected'>$month</option>";
 
}
 
 else{
	 echo "<option value='$month'>$month</option>";
 }
}
?>
</select><br><br>

<input type="submit" name="submit" value="Submit">

</form>
</body>
</html>


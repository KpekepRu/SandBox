		<html>
	<head>
<title>AddStudent</title>
	</head>

	<body>
<?php

$host="localhost";
$user="root";
$password="";
$link=@mysql_connect($host, $user, $password);

$n1=$_POST["f1"];
$n2=$_POST["f2"];
$n3=$_POST["f3"];
$n4=$_POST["f4"];

mysql_select_db("studlist") or die(mysql_error());
$strSQL="INSERT INTO students(StudName1,StudName2,Course,Rating) VALUES('$n1','$n2','$n3','$n4')"; 

mysql_query($strSQL) or die(mysql_error());

echo '<script type="text/javascript">
window.location = "index.php"
</script>';
/**/?>

	</body>
		</html>

		<html>
	<head><!--USING: html,css,php-->
<title>VoidWeb</title>
<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
<br/><br/>
<hr/>
<h1>WELCOME!</h1>
<h3>Database: Studlist [void group]</h3>
<hr/>
<h3>Students table->Add new student</h3>
<form method="post" action="handler.php">
	NAME-1:<br/><input type="text" name="f1"><br/>
	NAME-2:<br/><input type="text" name="f2"><br/>
	COURSE:<br/><input type="integer" name="f3"><br/>
	RATING:<br/><input type="integer" name="f4">
	<input type="submit">
</form>
<hr/>

<div class='table'
</div>

<?php
$host = "localhost";
$user = "root";
$password = "";
$link = @mysql_connect($host, $user, $password);
mysql_select_db("studlist") or die(mysql_error());
/**/?>

<table border="1">
	<tr>
<td>First Name</td>
<td>Second Name</td>
<td>Course</td>
<td>Rating</td>
	</tr>
<?php
echo '<table>';
$result=mysql_query("SELECT * FROM students ORDER by Rating");
$i=1;
while($row=mysql_fetch_assoc($result)) {
	echo '
	<tr>
		<td style="width: 35%;" padding-left:1%;">'.$row['StudName1'].'</td>
		<td style="width: 30%;" padding-left:1%;">'.$row['StudName2'].'</td>
		<td style="width: 10%;" padding-left:1%;">'.$row['Course'].'</td>
		<td style="width: 10%;" padding-left:1%;">'.$row['Rating'].'</td>
	</tr>
	';
//$i++;
}
echo '</table>';
/**/?>
</table>
	</body>
		</html>

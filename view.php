<?php
$server="localhost";
$uname="root";
$psd="";
$db="pdo";
	$name=$_POST['sname'];
	$pss=$_POST['pass'];		
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$psd);
$query2="select*from ivl";
$stmt=$con->prepare($query2);
$stmt->execute();
$row=$stmt->fetchAll();
echo "<table><tr><th>id></th><th>name</th><th>pass</th></tr>";
foreach ($row as $value) {
	$id=$value[0];
	$name=$value[1];
	$pass=$value[2];
	echo"<tr><td>$id</td>";
	echo"<td>$name</td>";
    echo"<td>$pass</td></tr>";
		
}
echo"</table>";
?>
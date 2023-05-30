<?php
$server="localhost";
$uname="root";
$psd="";
$db="pdo";

	$iname=$_POST['sname'];
	$pss=$_POST['pass'];
	$con=new PDO("mysql:host=$server;dbname=$db",$uname,$psd);
	$query3="select * from ivl where name=:rname;";
	$stmt=$con->prepare($query3);
	$stmt->execute([":rname"=>$iname]);
	if($row=$stmt->fetchAll())
	{
		foreach ($row as  $value) 
		{
		$psw=$value[2];
	}
	if($psw==$pss)
	{
		echo"<script>alert('login success');window.location.href='form.php';</script>";
	}
	else
	{
		echo"<script>alert('invalid password');</script>";
	}
}
else
{
echo"<script>alert('invalid name');</script>";
}
 
?>
<?php
$server="localhost";
$uname="root";
$psd="";
$db="pdo";
try {
	$name=$_POST['sname'];
	$pss=$_POST['pass'];		
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$psd);
$query="insert into ivl(name,pass)values(:iname,:ipass)";
$stmt=$con->prepare($query);
if($stmt->execute([":iname"=>$name,":ipass"=>$pss]))
{
	$id=$con->lastinsertID();
  echo"id number:".$id."inserted successfully";
	// echo" inserted";
}	
else

{
	echo"not inserted";
}
} 
catch (PDOException $e) 
{
echo $e->getmessage();
}
?>
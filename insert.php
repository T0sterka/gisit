<?
$con = mysqli_connect("127.0.0.1", "root", "", "gisit"); 

$query2 = mysqli_query($con, "INSERT INTO USERS (username, pass) VALUES ('{$_GET['username']}', '{$_GET['pass']}')");

header("Location: main.php");
?>
<?
$con = mysqli_connect("127.0.0.1", "root", "", "gisit"); 

$query2 = mysqli_query($con, "INSERT INTO pol (img, title, comment) VALUES ('{$_GET['img']}', '{$_GET['title']}', '{$_GET['comment']}')");

header("Location: kar.php");
?>
<?php
$host_heroku = "ec2-54-158-232-223.compute-1.amazonaws.com";
$db_heroku = "devkq9p8tndv0m";
$user_heroku = "ecfkdwhillmjlv";
$pw_heroku =
"f6ab6a678c1d56a6b0c98dce86409eba06ab9edac252b1a5c5c5175396400a21";
$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
$pg_heroku = pg_connect($conn_string);
if (!$pg_heroku)
{
die('Error: Could not connect: ' . pg_last_error());
}
$productid=$_GET['pi'];
$query = "DELETE FROM atnshop2 WHERE productid = '$productid'";
$data = pg_query($pg_heroku,$query);
if($data)
{
 echo "<script>alert('Delete Successfully!')</script>";
?>
<meta http-equiv="refresh" content="0; url=https://atnshoptest1.herokuapp.com/login2.php" />
<?php
}
else
{
 echo "Failed to delete.";
}
?>

<html>
<head>
 <ul>
 <li> <a href="index.php"> Log out</a> </li>
 </ul>
 </head>
 <body>
 <style>
 body {
    background-image: url('background.jpg');
 background-attachment: fixed;
 background-size: 100%100%;
 }
 </style>
   <style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>
 <table border="2">
 <tr>
 <th>Product ID</th>
 <th>Product Name</th>
 <th>Product Price</th>
 <th>Quantity</th>
 </tr>
<?php
echo '<p> ATN Shop 1</p>';
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
 $query = 'select * from atnshop1';
$data = pg_query($pg_heroku, $query);
 $total = pg_num_rows($data);
if($total!=0)
{
while ($result=pg_fetch_assoc($data))
{
echo "
<tr>
<td>".$result['productid']."</td>
<td>".$result['productname']."</td>
<td>".$result['productprice']."</td>
<td>".$result['quantityonhand']."</td>
</tr>
";
}
}

?>
<table border="2">
 <tr>
 <th>Product ID</th>
 <th>Product Name</th>
 <th>Product Price</th>
 <th>Quantity</th>
 </tr>
<?php
echo '<p> ATN Shop 2</p>';
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
 $query = 'select * from atnshop2';
$data = pg_query($pg_heroku, $query);
 $total = pg_num_rows($data);
if($total!=0)
{
while ($result=pg_fetch_assoc($data))
{
echo "
<tr>
<td>".$result['productid']."</td>
<td>".$result['productname']."</td>
<td>".$result['productprice']."</td>
<td>".$result['quantityonhand']."</td>
</tr>
";
}
}

?>
</body>
</html>

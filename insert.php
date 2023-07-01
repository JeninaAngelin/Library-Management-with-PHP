<html>
<head>
<?php
require_once("connectl.php");
if(!empty($_POST))
{
$a=$_POST['bid'];
$b=$_POST['bname'];
$qry="insert into book(bid,bname) values ('$a','$b')" or die(mysql_error());
echo $qry;
mysql_select_db("dbSimple",$con) or die(mysql_error());
mysql_query($qry) or die(mysql_error());
echo "<br>";
echo "Inserted Successfully";
?>
</head>
<body>
<form method="post" action="#">
BOOK Id<input type=text name="bid"><br>
BOOK Name<input type=text name="bname">
<input type=submit value="Insert"></input>
</body>
</html>

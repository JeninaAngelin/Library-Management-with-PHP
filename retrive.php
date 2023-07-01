<html>
<head>
<?php
require_once("connectl.php");
if(!empty($_POST))
$qry="select * from book where bid='".$_POST['t1']."'" or die(mysql_error0);
echo $qry;
mysql_select_db("dbSimple",$con) or die(mysql_error());
$c=mysql_query($qry) or die(mysql_error());
}
if($b=mysql_fetch_assoc($c))
{
echo $b["bid"];
echo $b["bname"];
?>
<body>
<form method="post" action="#">
Book id<input type="text" name="t1">
<input id="button" type="submit" value="submit"/>
<input type="reset" value="reset">
</form>
</body>
</html>


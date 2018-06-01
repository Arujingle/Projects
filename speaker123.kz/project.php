<?php
mysql_connect("localhost","root","");
mysql_select_db("commentbox");
$name=$_POST['name'];
$level=$_POST['level'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];
 
$dbLink = mysql_connect("localhost", "commentbox", "");
    mysql_query("SET character_set_client=utf8", $dbLink);
    mysql_query("SET character_set_connection=utf8", $dbLink);
 
if($submit)
{
if($name&&$level&&$comment)
{
$insert=mysql_query("INSERT INTO comusers (name,level,comment) VALUES ('$name','$level','$comment') ");
echo "<meta HTTP-EQUIV='REFRESH' content='0; url=project.php'>";
}
else
{
echo "Заполните все данные";
}
}
?>




<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comment box</title>
</head>
 
<body>
<center>
<form action="project.php" method="POST">
<table>
<tr><td>Имя: <br><input type="text" name="name"/></td></tr>
<tr><td>Ваш уровень: <br><input type="text" name="name"/></td></tr>
<tr><td colspan="2">Ваш отзыв о курсе: </td></tr>
<tr><td colspan="5"><textarea name="comment" rows="10" cols="50"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Comment"></td></tr>
</table>
</form>



<?php
$dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_results=utf8", $dbLink);
    mb_language('uni');
    mb_internal_encoding('UTF-8');
 
$getquery=mysql_query("SELECT * FROM comusers ORDER BY id DESC");
while($rows=mysql_fetch_assoc($getquery))
{
$id=$rows['id'];
$name=$rows['name'];
$comment=$rows['comment'];
echo $name . '<br/>' . '<br/>' . $comment . '<br/>' . '<br/>' . '<hr size="1"/>'
;}
?>
 
</body>
</html>

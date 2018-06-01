

<?php

include ("blogad/bd.php"); ?>  

<html>
<head>

  <meta charset="utf-8" />
<title>Страница удаления нового урока</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
<!--Подключаем шапку сайта-->
<tr>
<td><img src="img/header-woman1.jpg" width="690" height="100"></td>
</tr> 
  <tr>
    <td><table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
<!--Подключаем левый блок сайта-->
  <td width="182px" valign="top" class="left">
        <p align="center" class="title">Уроки</p>
<div id="coolmenu">
<a href="add_lessons.php">Добавить</a>
<a href="edit_lessons.php">Редактировать</a>
<a href="del_lessons.php">Удалить</a>
<a href="edit_text.php">Редактировать статьи</a>
</div>	


 
        
        </td>      
        <td valign="top">
       <p> Выберите урок для удаления!</p>
      <form action="drop_lesson.php" method="post"> 
        
        
  <? 


$result = mysql_query("SELECT title,id FROM lessons");      
$myrow = mysql_fetch_array($result);

do 
{
printf ("<p><input name ='id' type='radio' value='%s'><label> %s </label></p>",$myrow["id"],$myrow["title"]);
}

while ($myrow = mysql_fetch_array($result));

?>
  <p><input name="submit" type="submit" value="Удалить урока"> </p>
  
  
       
	</form  
          ></td>
      </tr>
    </table></td>
  </tr>
<!--Подключаем нижний графический элемент-->
<tr>
    <td><img src="img/bg_footer.png" width="690" height="18"></td>
  </tr>
</table>
</body>
</html>
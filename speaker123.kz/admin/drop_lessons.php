<?php

include ("blogad/bd.php");

if (isset($_POST['id']))      {$id = $_POST['id'];}
?>

<html>
<head>

  <meta charset="utf-8" />
<title>Обработчик</title>
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
</div>	


 
        
        </td>      
        <td valign="top">
        <?php 
if (isset($id) )
{

$result = mysql_query ("DELETE FROM lessons WHERE id='$id'");

if ($result == 'true') {echo "<p>Ваш урок успешно удален!</p>";}
else {echo "<p>Ваш урок не удален!</p>";}


}		 
else 

{
echo "<p>Вы запустили данный фаил без параметра id и поэтому, удалить урок невозможно.</p>";
}     
         
		  
		 ?>
           
             </td>
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
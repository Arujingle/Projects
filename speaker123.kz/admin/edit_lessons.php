

<?php

 include ("blogad/bd.php");   
 if (isset($_GET['id'])) {$id = $_GET['id'];}
?>

<html>
<head>

  <meta charset="utf-8" />
<title>Страница добавления нового урока</title>
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
  <? 

if (!isset($id))

{
$result = mysql_query("SELECT title,id FROM lessons");      
$myrow = mysql_fetch_array($result);

do 
{
printf ("<p><a href='edit_lessons.php?id=%s'>%s</a></p>",$myrow["id"],$myrow["title"]);
}

while ($myrow = mysql_fetch_array($result));

}

else

{

$result = mysql_query("SELECT * FROM lessons WHERE id=$id");      
$myrow = mysql_fetch_array($result);

print <<<HERE

<form name="form1" method="post" action="update_lessons.php">
         <p>
           <label>Введите название урока<br>
             <input value="$myrow[title]" type="text" name="title" id="title">
             </label>
         </p>
         <p>
           <label>Введите краткое описание урока<br>
           <input value="$myrow[meta_d]" type="text" name="meta_d" id="meta_d">
           </label>
         </p>
         <p>
           <label>Введите ключевые слова для урока<br>
           <input value="$myrow[meta_k]" type="text" name="meta_k" id="meta_k">
           </label>
         </p>
         <p>
           <label>Введите дату добавления урока<br>
           <input value="$myrow[date]" name="date" type="text" id="date" value="2007-01-27">
           </label>
         </p>
         <p>
           <label>Ведите краткое описание урока с тэгами абзацев
           <textarea name="discription" id="discription" cols="40" rows="5">$myrow[discription]</textarea>
           </label>
         </p>
         <p>
           <label>Введите полный текст урока с тэгами
           <textarea name="text" id="text" cols="40" rows="20">$myrow[text]</textarea>
           </label>
         </p>
         <p>
           <label>Введите автора урока<br>
           <input value="$myrow[author]" type="text" name="author" id="author">
           </label>
         </p>
		 <input name="id" type="hidden" value="$myrow[id]">
		 
         <p>
           <label>
           <input type="submit" name="submit" id="submit" value="Сохранить изменения">
           </label>
         </p>
       </form>



HERE;
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
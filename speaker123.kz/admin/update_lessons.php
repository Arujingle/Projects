<?php

include ("blogad/bd.php");
if (isset($_POST['title']))       
{
$title = $_POST['title']; 

if ($title == '') 
{
unset($title);
}  

}

/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.   */
if (isset($_POST['meta_d']))      {$meta_d = $_POST['meta_d']; if ($meta_d == '') {unset($meta_d);}}
if (isset($_POST['meta_k']))      {$meta_k = $_POST['meta_k']; if ($meta_k == '') {unset($meta_k);}}
if (isset($_POST['date']))        {$date = $_POST['date']; if ($date == '') {unset($date);}}
if (isset($_POST['discription'])) {$discription = $_POST['discription']; if ($discription == '') {unset($discription);}}
if (isset($_POST['text']))        {$text = $_POST['text']; if ($text == '') {unset($text);}}
if (isset($_POST['author']))      {$author = $_POST['author']; if ($author == '') {unset($author);}}
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
<a href="edit_text.php">Редактировать статьи</a>
</div>	


 
        
        </td>      
        <td valign="top">
        <?php 
if (isset($title) && isset($meta_d) && isset($meta_k) && isset($date) && isset($discription) && isset($text) && isset($author))
{
/* Здесь пишем что можно заносить информацию в базу */
$result = mysql_query ("UPDATE Lessons SET title='$title', meta_d='$meta_d',meta_k='$meta_k',date='$date', discription='$discription',text='$text',author' WHERE id='$id'");

if ($result == 'true') {echo "<p>Ваш урок успешно обновлен!</p>";}
else {echo "<p>Ваш урок не обновлен!</p>";}


}		 
else 

{
echo "<p>Вы ввели не всю информацию, поэтому урок в базу не может быть обновлен.</p>";
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
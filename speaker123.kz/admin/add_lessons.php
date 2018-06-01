

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
<a href="table_app.php">Заявки</a>
</div>	
 


 
        
        </td>      
        <td valign="top">
           
        <form name="form1" method="post" action="give_lessons2.php">
          <p>
            <label>Введите название урока<br>
              <input type="text" name="title" id="title">
            </label>
            </p>
          <p>
            <label>Введите краткое описание урока<br>
            <input type="text" name="meta_d" id="meta_d">
            </label>
          </p>
          <p>
            <label>Введите ключевые слова для урока<br>
            <input type="text" name="meta_k" id="meta_k">
            </label>
            <br>
            </p>
          <p>
            <label>Введите дату добавления урока<br>
            <input name="date" type="text" id="date" value="2015-12-01">
            </label>
            <br>
            <br>
            <label>Ведите краткое описание урока с тэгами абзацев</label>
            
            <textarea name="discription" id="discription" cols="40" rows="5"></textarea>
</p>
          <p>
            <label>Введите полный текст урока с тэгами
            <textarea name="text" id="text" cols="40" rows="5"></textarea>
            </label>
            <br>
            </p>
          <p>
            <label>Введите автора урока<br>
            <input type="text" name="author" id="author">
            </label>
            <br>
            </p>
          <p>
            <label>
            <input type="submit" name="submit" id="submit" value="Занести урок в базу">
            </label>
            <br>
          </p>
        </form>  
        <p>&nbsp;</p      ></td>
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
<html>
<head>

<meta charset="utf-8" />
<title>Главная страница блока администратора</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
<!--Подключаем шапку сайта-->
<tr>
<td><img src="Шапка.jpg" width="690" height="100"></td>
</tr>
  <tr>
    <td><table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
<!--Подключаем левый блок сайта-->
  <td width="182px" valign="top" class="left">
        <p align="center" class="title">Еда</p>
<div id="coolmenu">

<a href="addfood.php">Добавить в меню</a>
<a href="#">Удалить</a>
<a href="admintable.php">Заказы</a>
<a href="index.php">Выход</a>
</div>	











<p style = "align:center"> Добро пожаловать в Админский блок!</p>
             <div class="table_show">
             <?php 
    // определяем начальные данные
    $db_host = 'localhost';
	 $db_name = 'shopping_cart';
    $db_username = 'root';
    $db_password = '';
    $db_table_to_show = 'tbl_customer';
	

    // соединяемся с сервером базы данных
    $connect_to_db = mysql_connect($db_host, $db_username, $db_password)
		or die("Could not connect: " . mysql_error());

    // подключаемся к базе данных
    mysql_select_db($db_name, $connect_to_db)
		or die("Could not select DB: " . mysql_error());
		mysql_query("set names utf8");

    // выбираем все значения из таблицы "Contacts"
    $qr_result = mysql_query("select * from " . $db_table_to_show)
		or die(mysql_error());
		mysql_query("set names utf8");
		
		// выводим на страницу сайта заголовки HTML-таблицы
    echo '<table border="1" style="solid black; border-collapse: collapse;">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Имя</th>';
	
	echo '<th>E-Mail</th>';
	echo '<th>Адрес</th>';
	echo '<th>Телефон</th>';
	
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	
   // выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
	while($data = mysql_fetch_array($qr_result)){ 
		echo '<tr>';
		echo '<td>' . $data['full_name'] . '</td>';
		echo '<td>' . $data['email'] . '</td>';
		echo '<td>' . $data['address'] . '</td>';
		echo '<td>' . $data['telephone'] . '</td>';
		
		echo '</tr>';
	}
	
    echo '</tbody>';
	echo '</table>';

    // закрываем соединение с сервером  базы данных
    mysql_close($connect_to_db);
?>
</div>
        </td>
      </tr>
    </table></td>
  </tr>
 
      
      <tr>
    <td><img src="img/bg_footer.png" width="100%" height="18"></td>
  </tr> 
</table>
</body>
</html>
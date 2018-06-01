<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("restoran", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$image = $_POST['image'];
$price = $_POST['price'];

if($name !=''||$price !=''){
//Insert Query of SQL
$query = mysql_query("insert into products (name,image, price) values ('$name', '$image', '$price')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>






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
<a href="index.html">Выход</a>
</div>	


 
        
        </td>     
        <td valign="top">
        <p style = "align:center"> Добро пожаловать в Админский блок!</p>
             
        </td>
      </tr>
    </table></td>
  </tr>


 
        
        </td>      
        <td valign="top">
           
        <form name="form1" method="post" action="addfood.php">
          <p>
            <label>Введите название еды<br>
              <input type="text" name="name" id="name">
            </label>
            </p>
          <p>
            <label>Введите ссылку на фото еды<br>
            <input type="text" name="image" id="image">
            </label>
          </p>
          <p>
            <label>Введите цену<br>
            <input type="text" name="price" id="price">
            </label>
            <br>
            </p>
          <p>
      
            <br>
           
            
</p>
          
        
          <p>
            <label>
            <input type="submit" name="submit" id="submit" value="Занести еду в меню">
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
</div>
    <td><img src="img/bg_footer.png" width="690" height="18"></td>
  </tr>
</table>
</body>
</html>
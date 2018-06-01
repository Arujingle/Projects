<?php 
include ("blogs/bd.php"); /*Соединяемся с базой*/

if(isset($_GET['id'])) {$id = $_GET['id'];}

$result = mysql_query("SELECT * FROM lessons WHERE id='$id'",$db);
$myrow = mysql_fetch_array($result); 
?>











<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="discription" content="<?php echo $myrow['meta_d']; ?>">
<meta name="keywords" content=" <?php echo $myrow['meta_k']; ?>">
<title><?php echo $myrow['title']; ?></title>
<link type="text/css" rel="stylesheet" href="styles/style.css" />
<link type="text/css" rel="stylesheet" href="styles/skin.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/initSlider.js"></script>
<!--[if IE 6]>
<script src="js/ie6-transparency.js"></script>
<script>DD_belatedPNG.fix('#header img, #featured-section h2, #circles img, #frontpage-sidebar .read-more, .blue-bullets li, #sidebar .sidebar-button, #project-content .read-more, .more-link, #contact-form .submit, .jcarousel-skin-tango .jcarousel-next-horizontal, .jcarousel-skin-tango .jcarousel-prev-horizontal, #commentform .submit');</script>
<style>body { behavior: url("styles/ie6-hover-fix.htc"); }</style>
<link rel="stylesheet" href="styles/ie6.css" />
<![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="styles/ie7.css" /><![endif]-->
<!--[if IE 8]><link rel="stylesheet" href="styles/ie8.css" /><![endif]-->
</head>
<body class="home">
<div id="wrap">
       
  <div id="header"> <a href="index.html "title="speakerlogo"><img src="images/logo.png" />
    <div id="nav"><a href="register.php">Регистрация</a>
      <ul class="menu">
        <li class="current_page_item"><a href="index.html"></a></li>
        <li><a href="about.php">О нас</a></li>
        
         <li><a href="portfolio.html">Видеоматериалы</a></li>
        <li><a href="#">Тестирование</a>
          <ul class="sub-menu">
            <li><a href="test.html">Онлайн-тестирование</a></li>
            <li><a href="#">Заявка на обучение</a></li>
            <li><a href="project.php">Отзывы студентов</a></li>
            <li><a href="lessons.php">Уроки про грамматикам</a></li>
         
          </ul>
        </li>
        <li><a href="contact1.php">Контакты</a></li>
      </ul>
    </div>
    <!--end nav-->
    <div class="Motto">
    <form name="form1" method="post" action="">
      
    </form>
    
    
     </div>
  </div>
  <!--end header-->
  
   
    <p class="show_title"><?php echo $myrow['title']; ?></p>
  
  
  
  
   <p><?php echo $myrow['text']; ?></p>
  
  
  
	  
	  

 


  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <div id="footer">
    <p class="copyright">Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved / Design By <a target="_blank" href="http://www.chris-creed.com/">Chris Creed</a></p>
  </div>
  <!--end footer-->
</div>
<!--end wrap-->
</body>
<div class="cache-images"><img src="images/red-button-bg.png" width="0" height="0" alt="" /><img src="images/black-button-bg.png" width="0" height="0" alt="" /></div>
<!--end cache-images-->
</html>﻿
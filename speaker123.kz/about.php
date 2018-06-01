<?php 
include ("blogs/bd.php"); /*Соединяемся с базой*/
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE page='about'",$db);
$myrow = mysql_fetch_array($result); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="discription" content="<?php echo $myrow['meta_d']; ?>  ">
<meta name="keywords" content=" <?php echo $myrow['meta_k']; ?>  ">
<title> <?php echo $myrow['title']; ?> </title>
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
       
  <div id="header"> <a href="index.php"title="speakerlogo"><img src="images/logo.png" />
    <div id="nav"> 
    <a href="login.php">Вход</a>
      <ul class="menu">
        <li class="current_page_item"><a href="index.html"></a></li>
        <li><a href="about.php">О нас</a></li>
        
         <li><a href="portfolio.html">Видеоматериалы</a></li>
        <li><a href="index.php">Действия</a>
          <ul class="sub-menu">
            <li><a href="test.html"> Онлайн-тестирование</a></li>
            <li><a href="lessons.php">У роки про грамматикам</a></li>
          </ul>
        </li>
        <li><a href="contact1.php">Контакты</a></li>
      </ul>
    </div>
    <!--end nav-->
    <div class="Motto">
    
    </div>
  </div>
  <!--end header-->

<div id="main">
    <div id="content">
     <div class="post" >
        
       <?php echo $myrow['text']; ?>   
        
</div>
<img src="images/teacher.jpg" style="width:500px;height:350px; align="left"> 
      <h2>Бизнес английский </h2>
      <p>Программа делового английского языка CE охватывает следующие навыки: ведение презентаций, изложение своей позиции и ее обоснование, использование деловой лексики и идиоматических оборотов в общении на темы, связанные с работой.
      
На занятиях также используются современные учебные методики , как case studies знаменитых ведущих зарубежных бизнес-школ.</p>
<img src="images/teachers business.jpg" style="width:500px;height:350px; align="left">
   
   <h2>Подготовка к IELTS</h2>
<p>Курс состоит из 3 уроков в неделю по 90 минут. Студенты фокусируются на грамматике и использовании языка.
Студенты развивают 4 навыка:

восприятие на слух
разговор
правописание и чтение
А так же концентрируются на более специализированных вопросах экзамена.</p>
<img src="images/british council.jpg" style="width:500px;height:350px; align="left">

 </div>
      <!--end post-->
      <div class="right-sight">
      <h2>Отзывы студентов</h2>
      <div>
        <pre><img src="images/alina.jpg" style="width:150px;height:150px;padding-right:10px; align="left">        </pre>
        <h3>Алина Маратова</h3>
        <p> Мне все нравится и я собираюсь и дальше учить английский в языковой школе «Capital Education».Мне очень нравится изучать английский в языковой школе «Capital Education». Здесь очень дружный и веселый коллектив. Занятия проходят очень интересно и непринужденно.</p>
        <h3>&nbsp;</h3>
      </div>
      
     <div><img src="images/elena1.jpg" style="width:150px;height:150px;padding-right:10px; align="left">
      <h3> Елена Уразакова </h3>
      <p> Хожу на курсы английского в течение года. Я довольна методами и уровнем преподавания английского языка. Благодаря моему преподавателю Асель Базаргалиевной, я заинтересовалась в изучение английского языка. Потому что мне нравится как она преподает, старается найти подход к каждому ученику. В ней считается одновременно и строгость и доброта. </p>
      </div>
      
      <div><img src="images/temirlan.jpg" style="width:150px;height:170px;padding-right:10px; align="left">
      <h3> Темирлан Мырзахметов </h3>
      <p>Высокий профессионализм преподавателей, порядочная и заботливая администрация создают отличную обстановку для изучения английского языка. В классах очень уютно и спокойно. Хочу выразить благодарность моему учителю Адамбаевой Асель, за то, что привила мне любовь к английскому языку. </p>
      </div>
      
      <div><img src="images/aiman.jpg" style="width:150px;height:170px;padding-right:10px; align="left">
      <h3> Айман Жанузакова </h3>
      <p>«CE» это действительно хороший образовательный центр! Благодаря самым лучшим преподавателем я подтянула свой английский язык от Intermediate до Advanced. И в этом центре не только можно получить знания,но и завести друзей ,получить море позитивных эмоций,и незабываемых впечатлений.</p>
      </div>
      
      </div>
      
      </div>
   
<div id="footer">
    <p class="copyright"> <a href="#"></a> 2015  Все права защищены   <a target="_blank" href="">Бахыт Алибековна</a></p>
  </div>
  <!--end footer-->
</div>
<!--end wrap-->
</body>
<div class="cache-images"><img src="images/red-button-bg.png" width="0" height="0" alt="" /><img src="images/black-button-bg.png" width="0" height="0" alt="" /></div>
<!--end cache-images-->
</html>
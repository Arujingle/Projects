<?php 
require 'connect.php';

$msg="";
$full_name = $_REQUEST['full_name'];
$telephone = $_REQUEST['telephone'];
$email = $_REQUEST['email'];
$level = $_REQUEST['level'];
$program_study = $_REQUEST['program_study'];
$form_study = $_REQUEST['form_study'];
$time_study = $_REQUEST['time_study'];

$full_name = $_POST['full_name'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$level = $_POST['level'];
$program_study = $_POST['program_study'];
$form_study = $_POST['form_study'];
$time_study = $_POST['time_study'];
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;} 
	
	
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

$full_name= clean($full_name);
$telephone = clean($telephone);
$email = clean($email);
$level = clean($level);
$program_study = clean($program_study);
$form_study = clean($form_study);
$time_study = clean($time_study);



if(!empty($full_name) && !empty($telephone) && !empty($email) && !empty($level)&& !empty($program_study)&& !empty($form_study) && !empty($time_study)) {
    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 

    if(check_length($full_name, 2, 50) && check_length($telephone, 2, 12) && check_length($level, 2, 30)  && check_length($program_study, 2, 30)&& check_length($form_study, 2, 30) && check_length($time_study, 2, 30)&& $email_validate) {
       echo "Спасибо за заявку! Наши администраторы обязательно свяжутся с Вами! "; } else { // добавили сообщение
        echo "Введенные данные некорректные";
    }
} else { // добавили сообщение
    echo " Вернитесь назад и заполните пустые поля";
}

   








$insert_sql = "INSERT INTO users (full_name, telephone, email, level,program_study,form_study,time_study)" .
"VALUES('{$full_name}', '{$telephone}', '{$email}', '{$level}', '{$program_study}', '{$form_study}','{$time_study}');";
mysql_query($insert_sql);

 

?>


Сделано:
- Макет натянут на wp
- Адаптивная вёрстка
- На главной в блоке Blog отображаются последние записи рубрики Blog
- На главной в блоке Case Studies отображаются последние записи рубрики Case Studies
- Добавлено отображение категорий (Blog, Case Studies)
- Подгрузка и поле редактирования History, Expertise, Our Services, Contact Us
- Мобильная версия меню /*добавить handler для сворачивания навигации по клику-нажатию*/
-- Форма обратной связи через AJAX (см. dropbox) /*Нужны тесты*/

Надо делать:
- Frontend:
-- null
- Backend:
-- Локализация сайта (английский, польский, белорусский, украинский, русский)

/*
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];} 
if (isset($_POST['subjectField'])) {$subjectField = $_POST['subjectField'];} 

$to = "eugenesolovyev92@gmail.com"; /*Укажите адрес, га который должно приходить письмо*/ 
$sendfrom = "polishlawyer@polishlawyer.us"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/ 
$headers = "From: " . strip_tags($sendfrom) . "\r\n"; 
$headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n"; 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-Type: text/html;charset=utf-8 \r\n"; 
$subject = "Test"; 
$message = "<b>Имя пославшего: </b>$name<br><b>Телефон: </b>$email<br><b>E-mail: </b>$subjectField"; 
$send = mail ($to, $subject, $message, $headers);
    //Have to test this code
    //I seem that this code doesn't work on real server
}
?>
*/
<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 05.10.15
 * Time: 22:11
 */

//echo ("получил данные ".$_POST['userName']." ,".$_POST['userPhone'].", ".$_POST['userText']);

/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/

$myMail = "mzapeka@gmail.com";
$subject = "Сообщение от клиента ".$_POST['userName'];
$text = "Имя клиент: ".$_POST['userName']."\n
        Телефонный номер: ".$_POST['userPhone']."\n
        Текст сообщения: ".$_POST['userText'];

$error = mail($myMail,$subject,$text);

if($error){
    echo $_POST['userName'].", Ваше сообщение успешно отправлено. В ближайшее время я Вам перезвоню.
    <br>Хорошего Вам дня!<br>
    C уважением, Сергей Жабинец";
}
else {
    echo $_POST['userName'].", к сожалению Ваше сообщение не было отправлено. Попробуйте пожалуйста отправить сообщение позже или перезвоните мне.
    <br>Извините за неудобства.<BR>
    C уважением, Сергей Жабинец";
}
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");


// 5 задание
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $author = $_POST["author"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (empty($email)) {
        $errors['email'] = "Email обязателен для заполнения";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Некорректный Email";
    }

    if (empty($message)) {
        $errors['message'] = "Сообщение обязательно для заполнения";
    }

    if (empty($errors)) {
        $emailTo = \Bitrix\Main\Config\Option::get("main", "email_from"); // берем почту из настроек

        $arFields = array(
            "EMAIL_TO" => $emailTo,
            "AUTHOR" => $author,
            "AUTHOR_EMAIL" => $email,
            "MESSAGE" => $message,
        );

        $event = new \CEvent;
        $sendResult = $event->Send("FEEDBACK_FORM", SITE_ID, $arFields);


        if($sendResult) {
            $success = true;
        } else {
            $errors["send"] = "Ошибка при отправке сообщения. Пожалуйста, попробуйте позже.";
        }
    }
}
// /5 задание
// 3 задание

?>
<?php
$APPLICATION->IncludeComponent(
    "test:users.group.admin",
    "",
    array(),
    false
);
?><?php
// /3 задание

// 4 задание
?><?php
$APPLICATION->IncludeComponent(
    "test:catalog.section.list",
    "",
    array(
        "IBLOCK_ID" => "2", // Замените на ID своего инфоблока
        "SECTION_ID" => "2", // Замените на ID своего раздела
    ),
    false
);
?><?php
// /4 задание

// продолжение 5 задания
?>

<h2>5 Задание</h2>
<? if ($success): ?>
    <p>Сообщение успешно отправлено!</p>
<? else: ?>
    <? if (!empty($errors)): ?>
        <div style="color: red;">
            <? foreach ($errors as $error): ?>
                <p><?=$error?></p>
            <? endforeach; ?>
        </div>
    <? endif; ?>

    <form method="post" action="" style="max-width: 600px; margin: 20px auto;">
        <div style="margin-bottom: 15px;">
            <label for="author" style="display: block; margin-bottom: 5px;">ФИО:</label>
            <input type="text" id="author" name="author" style="width: 100%; padding: 8px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; margin-bottom: 5px;">Ваш Email:</label>
            <input type="email" id="email" name="email" style="width: 100%; padding: 8px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="message" style="display: block; margin-bottom: 5px;">Ваше сообщение:</label>
            <textarea id="message" name="message" style="width: 100%; padding: 8px; border: 1px solid #ccc; height: 150px;"></textarea>
        </div>
        <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; cursor: pointer;">Отправить</button>
    </form>
<? endif;
// 5 задание
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
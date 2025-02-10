<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

function sendMail($arFields) {
    $emailTo = \Bitrix\Main\Config\Option::get("main", "email_from"); // берем почту из настроек

    $arFields["EMAIL_TO"] = $emailTo;

    $event = new \CEvent;
    $sendResult = $event->Send("FEEDBACK_FORM", SITE_ID, $arFields);


    if ($sendResult) {
        $success = true;
    } else {
        $errors["send"] = "Ошибка при отправке сообщения. Пожалуйста, попробуйте позже.";
    }
}

$theme = $_POST["theme"];
$author = $_POST["author"];
$email = $_POST["email"];
$message = $_POST["message"];

if (empty($email)) {
    $errors['email'] = "Email обязателен для заполнения";
}

if (empty($errors)) {

    $arFields = array(
        "THEME" => $theme,
        "AUTHOR" => $author,
        "AUTHOR_EMAIL" => $email,
        "MESSAGE" => $message,
    );

    sendMail($arFields);

}

}
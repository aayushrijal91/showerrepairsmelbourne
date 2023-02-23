<?php
include __DIR__ . '/env.php';

$site = "Shower Base & Leak Repairs Melbourne";
$phone_number = "(03) 9134 8951";
$admin_email = 'arijal@aiims.com.au'; //'info@generalhomeservices.com.au';
$bcc_email = "";
$no_reply_email = 'info@generalhomeservices.com.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

$facebook = "#";
$instagram = "#";
$linkedin = "#";
$youtube = "#";

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}

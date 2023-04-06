<?php
$title = 'Eirtis | Anasayfa';

if (strpos($_SERVER['REQUEST_URI'], 'about') !== false) {
    $title = 'Eirtis | Hakkımızda';
}
if (strpos($_SERVER['REQUEST_URI'], 'bot') !== false) {
    $title = 'Eirtis | Discord Bot';
}
if (strpos($_SERVER['REQUEST_URI'], 'commands') !== false) {
    $title = 'Eirtis | Komutlar';
}
if (strpos($_SERVER['REQUEST_URI'], 'contact') !== false) {
    $title = 'Eirtis | İletişim';
}
if (strpos($_SERVER['REQUEST_URI'], 'design') !== false) {
    $title = 'Eirtis | Tasarım';
}
if (strpos($_SERVER['REQUEST_URI'], 'sponsor') !== false) {
    $title = 'Eirtis | Sponsor';
}
if (strpos($_SERVER['REQUEST_URI'], 'team') !== false) {
    $title = 'Eirtis | Ekip';
}
if (strpos($_SERVER['REQUEST_URI'], 'web') !== false) {
    $title = 'Eirtis | Web';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
    <!-- Meta Tags -->
    <meta name="abstract" content="Eirtis Türkiye Çapında Gelişmekte Olan Bi Discord Botu">
    <meta name="author" content="Harlex">
    <meta name="copyright" content="Eirtis & eirtis 2023 © Tüm Hakları Saklıdır">
    <meta name="description" content="Eirtis, global bir Discord botudur ve aynı zamanda Discord Bot ve Web Sitesi tasarımları üzerine uzmanlaşmış bir topluluk tarafından geliştirilmiştir. eirtis'in sahibi olan bu topluluk, Discord sunucularına özelleştirilebilir özellikler eklemekle kalmaz, aynı zamanda web siteleri için modern ve kullanıcı dostu tasarımlar da sunar">
    <meta name="keywords" content="eirtis, eirtis, discord, eirtis discord, eirtis discord botu, eirtis bot, eirtis eirtis, eirtis eirtis, eirtis discord, eirtis discord botu, discord eirtis bot">
    <meta http-equiv="content-language" content="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/eirtis.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/eirtis.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/eirtis.png">
    <link rel="mask-icon" href="assets/img/eirtis.png" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta property="og:title" content="Eirtis">
    <meta property="og:description" content="Eirtis, global bir Discord botudur ve aynı zamanda Discord Bot ve Web Sitesi tasarımları üzerine uzmanlaşmış bir topluluk tarafından geliştirilmiştir. eirtis'in sahibi olan bu topluluk, Discord sunucularına özelleştirilebilir özellikler eklemekle kalmaz, aynı zamanda web siteleri için modern ve kullanıcı dostu tasarımlar da sunar">
    <meta property="og:image" content="https://eirtis.com.tr/assets/img/eirtis.png">
    <meta property="og:url" content="https://eirtis.com.tr">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- GOOGLE -->
    <meta name="google-site-verification" content="5bsv01X4bRapeovuq7GEL7LvFMjfa1tYyhCgOciR5ck" />


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N58CPTD');
    </script>
    <!-- End Google Tag Manager -->
</head>

<p id="cookie-notice">Bu internet sitesinde, kullanıcı deneyimini geliştirmek ve internet sitesinin verimli çalışmasını sağlamak amacıyla çerezler kullanılmaktadır. Bu internet sitesini kullanarak bu çerezlerin kullanılmasını kabul etmiş olursunuz<br><button onclick="acceptCookie();">Kabul Et</button></p>
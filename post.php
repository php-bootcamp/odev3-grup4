<?php
include "functions.php";

girisYonlendir(false, "login.php");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>...</title>
</head>
<body>
    <?php
    /**
     * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
     * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
     * bölebilirsiniz.
     */

    /**
     * **Giriş yapmış kullanıcının** `posts.php` veya `seen.php` sayfaları üzerinden
     * yönlenip **sabit** oluşturulmuş **tek bir** yazıya dair detay bilgisine görebileceği
     * sayfadır. Kullanıcının bu yazıyı okuduğu kaydedilmelidir.
     */
    $yazilar = include "data.php";

    if (!isset($_GET['yazi']))
        yonlendir("posts.php");

    if (!isset($yazilar[$_GET['yazi']]))
        yonlendir("posts.php");

    $yazi = $yazilar[$_GET['yazi']];

    setcookie($_GET['yazi'], true, time()+3600*24*30);
    ?>
    <h3><?= $yazi['baslik'] ?></h3>
    <p><?= $yazi['aciklama'] ?></p>
    <?= $yazi['icerik'] ?>
</body>
</html>
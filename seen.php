<?php include "functions.php"; girisYonlendir(false, "login.php"); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Okunmuş Yazılar</title>
</head>
<body>
    <?php
    
    /**
     * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
     * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
     * bölebilirsiniz.
     */

    /**
     * **Giriş yapmış kullanıcının** uygulama üzerinde okumuş olduğu yazıların
     * listelendiği sayfadır. `posts.php` sayfasında olduğu gibi yazı hakkında ufak
     * bilgi ve detay linki yer almalıdır.
     */

    $yazilar = include "data.php";

    $okunanlar = array_filter($yazilar, function ($yazi, $anahtar) {
        return isset($_COOKIE[$anahtar]) && $_COOKIE[$anahtar];
    }, ARRAY_FILTER_USE_BOTH);

    /*
    $okunanlar = [];
    foreach ($yazilar as $anahtar => $yazi) {
        if (isset($_COOKIE[$anahtar]) && $_COOKIE[$anahtar]) {
            $okunanlar[$anahtar] = $yazi;
        }
    }
    var_dump($okunanlar);
    */

    ?>
    <?php foreach($okunanlar as $anahtar => $okunan): ?>
    <h3><?= $okunan['baslik'] ?></h3>
    <p><?= $okunan['aciklama'] ?></p>
    <p>
        <a href="post.php?yazi=<?= $anahtar ?>">Detay</a>
        <a href="seen-delete.php?yazi=<?= $anahtar ?>">Okunanlardan Kaldır</a>
    </p>
    <?php endforeach; ?>
</body>
</html>
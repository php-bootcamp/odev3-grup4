<?php
include "functions.php";

girisYonlendir(false, "login.php");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Yazılar</title>
</head>
<body>
    <?php
    
    /**
     * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
     * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
     * bölebilirsiniz.
     */

    /**
     * **Giriş yapmış kullanıcının** PHP Bootcamp içerisinde gördüğümüz konularla
     * alakalı olarak hazırlanmış olan 2 veya daha fazla yazının başlığı, açıklaması,
     * resmini ve detay linkini/butonunu gördüğü bir sayfa bekliyoruz. Burada _isteğe
     * bağlı olarak_ bir sayfalama (1. sayfa, 2. sayfa gibi) oluşturabilirsiniz.
     *  
     * **Not:** Henüz veritabanı görmediğimiz için bu yazıları sabit (hardcoded)
     * verebilirsiniz. `data.php` dosyası üzerinden almanız bekleniyor.
     */

    $yazilar = include "data.php";

    ?>
    <a href="seen.php">Okunanlar</a>
    <a href="logout.php">Çıkış Yap</a>
    <?php foreach($yazilar as $anahtar => $yazi): ?>
    <h3><?= $yazi['baslik'] ?></h3>
    <p><?= $yazi['aciklama'] ?></p>
    <p><a href="post.php?yazi=<?= $anahtar ?>">Detaylar</a></p>
    <?php endforeach; ?>
</body>
</html>
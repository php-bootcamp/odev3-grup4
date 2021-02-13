<?php
include "functions.php";

girisYonlendir(true, "posts.php");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Giriş Yap</title>
</head>
<body>
    <?php
    
    /**
     * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
     * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
     * bölebilirsiniz.
     */

    /**
     * **Giriş yapmamış olan kullanıcı için** giriş yapma formunu gösterecek olan
     * sayfadır. Burada gösterilen forma ait değerlerin `do-login.php`
     * dosyasına gitmesini bekliyoruz.
     */
    
    ?>
    <h1>Giriş Yap</h1>
    <?php if(isset($_SESSION['error'])): ?>
        <p><b><?= $_SESSION['error'] ?></b></p>
    <?php unset($_SESSION['error']); endif; ?>
    <form method="post" action="do-login.php">
        <label for="kullaniciadi">Kullanıcı Adı</label>
        <input type="text" name="kullaniciadi" placeholder="Kullanıcı Adı" value="<?= isset($_SESSION['username']) ? $_SESSION['username'] : null  ?>" />
        <?php
        if (isset($_SESSION['username'])) {
            unset($_SESSION['username']);
        }
        ?>
        <label for="password">Parola</label>
        <input type="password" name="parola" placeholder="Parola" />
        <button type="submit">Giriş Yap</button>
    </form>
</body>
</html>
<?php

/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

 /**
  * **Giriş yapmış kullanıcının** uygulama içerisinde okuduğunu belirten durumu
  * geri alabildiği (sildiği) sayfadır. `seen.php` veya `post.php`
  * (ikisinden biri veya her ikisi) sayfalarından buraya yönlendirebilirsiniz.
  * Eğer bu sayfaya birden fazla yerden gelebiliyorsa **geldiği sayfaya** yönlenmesini
  * bekliyoruz.
  */

 include "functions.php";

 girisYonlendir(false, "login.php");

 if (!isset($_GET['yazi']))
     yonlendir("seen.php");

 $yazilar = include "data.php";

 if (!isset($yazilar[$_GET['yazi']]))
     yonlendir("seen.php");

 setcookie($_GET['yazi'], false, time()-3600);
 yonlendir("seen.php");
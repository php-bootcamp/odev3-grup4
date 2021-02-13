<?php

/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

 /**
  * Uygulamanın diğer sayfalarda sık sık uyguladığı işlemleri betimleyecek
  * **sadece** fonksiyonların yer alması gereken php dosyasıdır.
  *
  * Bu dosyayı diğer dosyalarınızda dahil etmek için `require`, `include`,
  * `require_once` veya `include_once` fonksiyonlarını kullanabilirsiniz.
  */

 session_start();

 function girisKontrol() {
     return isset($_SESSION['login']) && $_SESSION['login'];
 }

 function yonlendir($adres) {
     header("Location: ".$adres);
     exit;
 }

 function girisYonlendir($durum, $adres) {
     if (girisKontrol() == $durum) {
         yonlendir($adres);
     }
 }

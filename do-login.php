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
  * **Giriş yapmamış olan kullanıcı için** formdan gelen bilgilerin kontrol
  * edildiği ve kullanıcı adı `bootcamp`, parola `bootcamp` olduğu durumda
  * sisteme giriş yaptırmasını bekliyoruz. Bilgilerde eksiklik veya hata olduğu
  * durumda `login.php` dosyasına yönlenmesini ve ekrana hata ile ilgili mesajı
  * yazmasını bekliyoruz. Ek olarak, kullanıcının hassas verisi dışındaki
  * verilerin (parola hariç diğer alanlar gibi) form üzerinde **girilmiş**
  * olmasını bekliyoruz.
  * 
  * (Örn: `login.php` dosyasında kullanıcı adı kısmına `eray`, parola kısmına
  * `deneme` yazdığımda `do-login.php` dosyasına gitmesini ve oradan dönüp forma
  * geri geldiğimde hata mesajı ile birlikte formda sadece kullanıcı adı kısmının
  * `eray` ile dolmasını bekliyoruz.)
  */

 include "functions.php";

 girisYonlendir(true, "posts.php");

if (!isset($_POST['kullaniciadi']) || !isset($_POST['parola']))
    yonlendir('login.php');

$_SESSION['username'] = $_POST['kullaniciadi'];

if ($_POST['kullaniciadi'] == "bootcamp" && $_POST['parola'] == "bootcamp") {
    $_SESSION['login'] = true;
    $_SESSION['user'] = "bootcamp";
    yonlendir('posts.php');
}

$_SESSION['error'] = "Kullanıcı adı veya parola hatalı!";
yonlendir('login.php');
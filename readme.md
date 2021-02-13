İçerisinde 9 adet PHP dosyası barındıran basit bir uygulama yapmanız bekleniyor.

[Figma Çizimleri](https://www.figma.com/file/AXgiyBsE2hqUX3OY2aTzKs/Vivense-PHP-Bootcamp-Grup-%C3%96devleri?node-id=0%3A1)

[Döküman](https://hackmd.io/@eray/HJk7bIRed)

- `functions.php` - Uygulamanın diğer sayfalarda sık sık uyguladığı işlemleri betimleyecek **sadece** fonksiyonların yer alması gereken php dosyasıdır.
    
    Bu dosyayı diğer dosyalarınızda dahil etmek için [`require`](https://www.php.net/manual/en/function.require.php), [`include`](https://www.php.net/manual/en/function.include.php), [`require_once`](https://www.php.net/manual/en/function.require-once.php) veya [`include_once`](https://www.php.net/manual/en/function.include-once.php) fonksiyonlarını kullanabilirsiniz.

- `data.php` - Uygulamanın çeşitli sayfalarında PHP Bootcamp içerisinde işlediğimiz konulara dair ufak makalelerin (veya [lorem ipsum](https://www.lipsum.com/) gibi doldurmalık yazıların) yer alması bekleniyor.
    > **Not:** Henüz veritabanı görmediğimiz için bu yazıları sabit (hardcoded) verebilirsiniz.

- `index.php` - **Giriş yapmamış kullanıcı** için giriş sayfasına (`login.php`), **giriş yapmış kullanıcı** için de yazı listesini(`posts.php`) göreceği sayfaya yönlendirmesi gerekiyor.

    Yönlendirme işlemi için HTTP'nin [`Location`](https://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.30) response başlığını PHP'deki [`header()`](https://www.php.net/manual/en/function.header.php) fonksiyonu ile kullanabilirsiniz. Önerilmese de HTML tarafta [`http-equiv`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta#attr-http-equiv) özelliğini veya JavaScript ile [`window.location`](https://developer.mozilla.org/en-US/docs/Web/API/Window/location) değerini de kullanabilirsiniz.
- `login.php` - **Giriş yapmamış olan kullanıcı için** giriş yapma formunu gösterecek olan sayfadır. Burada gösterilen forma ait değerlerin `do-login.php` dosyasına gitmesini bekliyoruz.

    ![login.php](https://i.ibb.co/kyL2HYj/Vivense-PHP-Bootcamp-Grup-devleri-1.png)
    
- `do-login.php` - **Giriş yapmamış olan kullanıcı için** formdan gelen bilgilerin kontrol edildiği ve kullanıcı adı `bootcamp`, parola `bootcamp` olduğu durumda sisteme giriş yaptırmasını bekliyoruz. Bilgilerde eksiklik veya hata olduğu durumda `login.php` dosyasına yönlenmesini ve ekrana hata ile ilgili mesajı yazmasını bekliyoruz. Ek olarak, kullanıcının hassas verisi dışındaki verilerin (parola hariç diğer alanlar gibi) form üzerinde **girilmiş** olmasını bekliyoruz. (Örn: `login.php` dosyasında kullanıcı adı kısmına `eray`, parola kısmına `deneme` yazdığımda `do-login.php` dosyasına gitmesini ve oradan dönüp forma geri geldiğimde hata mesajı ile birlikte formda sadece kullanıcı adı kısmının `eray` ile dolmasını bekliyoruz.)
- `posts.php` - **Giriş yapmış kullanıcının** PHP Bootcamp içerisinde gördüğümüz konularla alakalı olarak hazırlanmış olan 2 veya daha fazla yazının başlığı, açıklaması, resmini ve detay linkini/butonunu gördüğü bir sayfa bekliyoruz. Burada _isteğe bağlı olarak_ bir sayfalama (1. sayfa, 2. sayfa gibi) oluşturabilirsiniz. 
    > **Not:** Henüz veritabanı görmediğimiz için bu yazıları sabit (hardcoded) verebilirsiniz. `data.php` dosyası üzerinden almanız bekleniyor.

    ![posts.php](https://i.ibb.co/CBQRHb7/Vivense-PHP-Bootcamp-Grup-devleri-2.png)
    
- `post.php` - **Giriş yapmış kullanıcının** `posts.php` veya `seen.php` sayfaları üzerinden yönlenip **sabit** oluşturulmuş **tek bir** yazıya dair detay bilgisine görebileceği sayfadır. Kullanıcının bu yazıyı okuduğu kaydedilmelidir.

    ![post.php](https://i.ibb.co/vkdqWbj/Vivense-PHP-Bootcamp-Grup-devleri-3.png)

- `seen.php` - **Giriş yapmış kullanıcının** uygulama üzerinde okumuş olduğu yazıların listelendiği sayfadır. `posts.php` sayfasında olduğu gibi yazı hakkında ufak bilgi ve detay linki yer almalıdır.

    ![seen.php](https://i.ibb.co/pwPPyhL/Vivense-PHP-Bootcamp-Grup-devleri-4.png)

- `seen-delete.php` - **Giriş yapmış kullanıcının** uygulama içerisinde okuduğunu belirten durumu geri alabildiği (sildiği) sayfadır. `seen.php` veya `post.php` (ikisinden biri veya her ikisi) sayfalarından buraya yönlendirebilirsiniz. Eğer bu sayfaya birden fazla yerden gelebiliyorsa **geldiği sayfaya** yönlenmesini bekliyoruz.

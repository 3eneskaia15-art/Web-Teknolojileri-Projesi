# WEB TEKNOLOJİLERİ DERSİ PROJE ÖDEVİ RAPORU

**Ders:** Web Teknolojileri (2025-2026 Bahar Dönemi)
**Öğrenci Adı Soyadı:** Enes Kaya
**Öğrenci Numarası:** b251210099
**Bölüm:** Bilgisayar Mühendisliği

**GitHub Proje Linki:** [Buraya GitHub Repo Linkinizi Ekleyin]
**Canlı Yayın (Hosting) Linki:** [Buraya Sitenizin Canlı Linkini Ekleyin]

---

## 1. Projenin Amacı ve Özeti
Bu proje, web standartları (Semantik HTML5, Responsive Design, CSS, JS ve PHP) kullanılarak kişisel tanıtım, eğitim bilgileri ve ilgi alanlarını yansıtan profesyonel bir web uygulaması olarak geliştirilmiştir. Projede hiçbir hazır şablon (template) kullanılmamış, tasarım sıfırdan Bootstrap 5 ve Vanilla CSS kullanılarak Responsive (çözünürlüğe duyarlı) bir şekilde hazırlanmıştır.

---

## 2. Sayfa İçerikleri ve Ekran Görüntüleri

### 2.1 Hakkında (Giriş) Sayfası
Kişisel bilgilerimi ve projeye genel bakışı sunduğum ana sayfadır. Menüye kolay erişim için butonlar tasarlanmıştır. Fotoğrafım ile birlikte kısa bir karşılama metni yer almaktadır.
*(Buraya Giriş Sayfası Ekran Görüntüsü Gelecek)*

### 2.2 Özgeçmiş (CV) Sayfası
Eğitim bilgilerimi, yeteneklerimi ve katıldığım projeleri detaylandırdığım sayfadır. Sayfa içeriği tamamen Semantik HTML5 etiketleri (`<header>`, `<section>`, `<article>`) kurgusu kullanılarak hazırlanmıştır.
*(Buraya Özgeçmiş Sayfası Ekran Görüntüsü Gelecek)*

### 2.3 Şehrim Sayfası
Memleketim Sakarya'nın kültürel ve doğal güzelliklerinin tanıtıldığı sayfadır. Bootstrap Carousel kullanılarak 4 farklı resimden oluşan interaktif, tıklanabilir bir kaydırma (Slider) bölümü oluşturulmuştur.
*(Buraya Şehrim Sayfası Ekran Görüntüsü Gelecek)*

### 2.4 Mirasımız ve Takımımız
Sakarya'nın önemli miraslarından Justinianus Köprüsü ve şehrimizin takımı olan Sakaryaspor'un tanıtıldığı bilgi sayfasıdır. 
*(Buraya Mirasımız Sayfası Ekran Görüntüsü Gelecek)*

### 2.5 İlgi Alanlarım (API Entegrasyonu)
Bu sayfada hobilerim tanıtılmıştır. Aynı zamanda JavaScript kullanılarak asenkron veri çekme işlemi yapılmıştır.
- **iTunes API:** En sevdiğim müziklerin verileri ve albüm kapakları anlık olarak listelenmiştir.
- **CheapShark API:** Sevdiğim oyunlara ait veriler ve kapak görselleri internetten çekilmiştir.
Döviz veya hava durumu API'leri kullanılmamış, ödev şartlarına tamamen uyulmuştur.
*(Buraya İlgi Alanları Sayfası Ekran Görüntüsü Gelecek)*

### 2.6 İletişim Sayfası ve Form Denetimleri
Ziyaretçilerin bana ulaşabilmesi için detaylı bir form hazırlanmıştır. Formda metin, email, telefon (sadece rakam denetimi), seçmeli (select), çoklu (radio, checkbox) alanları bulunmaktadır. 
- Form doğrulama (Validation) işlemi, hem **Native (Vanilla) JavaScript** ile hem de **Vue.js** ile iki ayrı buton kullanılarak ayrı ayrı gerçekleştirilmiştir. 
- Form, başarılı olduğunda PHP sunucu sayfasına yönlendirilmektedir.
*(Buraya İletişim Sayfası Ekran Görüntüsü Gelecek)*

### 2.7 Sunucu Tarafı (PHP) Çıktı Sayfası
İletişim formundan "POST" metoduyla gönderilen tüm veriler `iletisim_sonuc.php` sayfasında alınmış ve düzenli, temiz bir tablo tasarımı içerisinde ekrana yazdırılmıştır.
*(Buraya PHP Çıktı Sayfası Ekran Görüntüsü Gelecek)*

### 2.8 Login (Giriş) ve Güvenlik Testi Sayfası
Projenin güvenli giriş mekanizmasını test etmek için bir Login sayfası tasarlanmıştır:
- Kullanıcı adı: `b251210099@sakarya.edu.tr`
- Şifre: `b251210099`
Boş alan ve mail formatı kontrolü JS ile yapılmıştır. Girilen veriler `login_sonuc.php` sayfasına POST edilmiştir. Şifre ve Mail doğruysa "Hoşgeldiniz b251210099" mesajı gösterilmekte, yanlışsa tekrar login formuna hata uyarısı ile yönlendirilmektedir.
*(Buraya Login ve Login Sonuç Ekran Görüntüleri Gelecek)*

---

## 3. Kullanılan Teknolojiler ve Zorunluluklar
1. **HTML5:** Sayfa yapısı Semantic tag'lerle desteklenmiştir.
2. **CSS3 & Bootstrap 5:** Tamamen Responsive (Mobil uyumlu) ve özel `.css` dosyası üzerinden tasarım yönetilmiştir.
3. **JavaScript (Native & Vue.js):** İletişim formunda çift katmanlı denetim ve API üzerinden (Fetch API) asenkron JSON verisi okuma işlemleri.
4. **PHP:** Form POST verilerinin yakalanması ve kullanıcı doğrulama (Login) işlemleri yapılmıştır.
5. **Git & GitHub:** Versiyon kontrolü sağlanmış ve farklı günlerde en az 10 Push işlemi gerçekleştirilmiştir.

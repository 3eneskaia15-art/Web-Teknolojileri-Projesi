<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sonucu - Enes Kaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <main class="container py-5">
        <a href="İletişim.html" class="back-link">&#8592; İletişim Sayfasına Dön</a>
        <header class="text-center mb-5">
            <h1 class="highlight-text display-5 fw-bold">Mesajınız Alındı</h1>
            <p class="lead">Göndermiş olduğunuz bilgiler başarıyla sunucuya ulaştı.</p>
        </header>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <section class="result-box p-4 rounded shadow">
                    <h3 class="highlight-text mb-4">Gelen Veriler</h3>
                    <table class="table table-dark table-striped">
                        <tbody>
                            <tr>
                                <th style="width: 30%;">Ad Soyad:</th>
                                <td><?php echo isset($_POST['isim']) ? htmlspecialchars($_POST['isim']) : '-'; ?></td>
                            </tr>
                            <tr>
                                <th>E-Posta:</th>
                                <td><?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '-'; ?></td>
                            </tr>
                            <tr>
                                <th>Telefon:</th>
                                <td><?php echo isset($_POST['telefon']) ? htmlspecialchars($_POST['telefon']) : '-'; ?></td>
                            </tr>
                            <tr>
                                <th>Konu:</th>
                                <td><?php echo isset($_POST['konu']) ? htmlspecialchars($_POST['konu']) : '-'; ?></td>
                            </tr>
                            <tr>
                                <th>Hitap:</th>
                                <td><?php echo isset($_POST['cinsiyet']) ? htmlspecialchars($_POST['cinsiyet']) : '-'; ?></td>
                            </tr>
                            <tr>
                                <th>Mesaj:</th>
                                <td><pre class="text-light bg-dark p-2 border rounded m-0"><?php echo isset($_POST['mesaj']) ? htmlspecialchars($_POST['mesaj']) : '-'; ?></pre></td>
                            </tr>
                            <tr>
                                <th>Onay:</th>
                                <td><?php echo isset($_POST['onay']) ? 'Kabul Edildi' : 'Kabul Edilmedi'; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </main>
</body>
</html>

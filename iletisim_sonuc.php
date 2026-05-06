<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sonucu - Enes Kaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0F172A;
            color: #F8FAFC;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .highlight-text { color: #38BDF8; }
        .result-box {
            background-color: #1E293B;
            border-left: 5px solid #38BDF8;
        }
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            color: #38BDF8;
            text-decoration: none;
            font-size: .9rem;
            margin-bottom: 2rem;
            opacity: .8;
            transition: opacity .2s;
        }
        .back-link:hover { opacity: 1; text-decoration: underline; }
    </style>
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

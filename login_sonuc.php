<?php
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

// Tanımlanan değişkenler
$expected_email = 'b251210099@sakarya.edu.tr';
$expected_password = 'b251210099';

// Eğer boş veya yanlışsa geri yönlendir
if ($email === '' || $password === '' || $email !== $expected_email || $password !== $expected_password) {
    header('Location: Login.html?error=1');
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Başarılı - Enes Kaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <main class="container py-5 text-center">
        <section class="form-box p-5 rounded shadow d-inline-block mt-5 text-center" style="border-left: 5px solid #22c55e;">
            <h1 class="highlight-green mb-4">Hoşgeldiniz <?php echo htmlspecialchars($password); ?></h1>
            <p class="lead">Başarılı bir şekilde giriş yaptınız.</p>
            <a href="GirisSayfasi.html" class="btn btn-outline-info mt-4 px-4 py-2">Ana Sayfaya Git</a>
        </section>
    </main>
</body>
</html>

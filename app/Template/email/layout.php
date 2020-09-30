<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->assetHelper->extcss('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800') ?>
    <title>Mail Content</title>
</head>
<body>
    <div class="mail-container">
        <header class="logo">
            Akane Framework Mailer Test
            <hr class="line">
        </header>
        <section class="mail-content">
            <?= $content ?>
        </section>
        <footer class="footer">
            <p class="small">
                this is just an email testing from akane framework
            </p>
        </footer>
    </div>
    <div class="copyright text-center">
        Webhade Creative 2020 &copy;
    </div>
</body>
</html>
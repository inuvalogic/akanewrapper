<!DOCTYPE html>
<html>
<head>
<title>An Awesome Site using Akane Framework</title>
<?= $this->assetHelper->extcss('https://fonts.googleapis.com/css?family=OpenSans:300,400,500,600,700,800') ?>
<?= $this->assetHelper->css('bootstrap.min.css') ?>
<?= $this->assetHelper->css('theme.css') ?>
</head>
<body>
<?= $this->render('header'); ?>
<?= $content; ?>
<?= $this->render('footer'); ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Slim Starter Tempalte</title>
    <link rel="stylesheet" href="<?php asset('style.css') ?>">
</head>
<body>
    <?php component('header.php') ?>
    <?php component('footer.php') ?>

    <?php echo config('general.php')['name'];  ?>

    <script src="<?php asset('app.js') ?>"></script>
</body>
</html>
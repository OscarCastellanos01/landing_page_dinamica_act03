<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MVC</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/styles.css">
</head>
<body>
    <header>
        <h1>Welcome to PHP MVC</h1>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> PHP MVC</p>
    </footer>
    <script src="<?php echo BASE_URL; ?>/js/script.js"></script>
</body>
</html>

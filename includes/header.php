<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?></title>
    <link rel="stylesheet" href="public/style.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav>
            <ul class="d-flex justify-content-evenly py-3">
                <li><a href="index.php" class="text-white text-decoration-none">Accueil</a></li>
                <li><a href="about.php" class="text-white text-decoration-none">À propos</a></li>
                <li><a href="contact.php" class="text-white text-decoration-none">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container-fluid">
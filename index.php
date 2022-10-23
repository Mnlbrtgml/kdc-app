<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasilag Dental Clinic</title>

    <link rel="stylesheet" href="./src/css/output.css">
</head>

<body class="m-0 p-0 bg-fixed bg-cover bg-center bg-no-repeat transition-all text-sm bg-slate-50 text-slate-900 dark:bg-slate-900 dark:text-slate-50 md:text-base" style="background-image: url('./public/resources/facade.jpg');">

    <!-- Navbar -->
    <?php require __DIR__ . './views/pages/navbar.php' ?>

    <!-- Sidebar -->
    <?php require __DIR__ . './views/pages/sidebar.php' ?>


    <main class="w-full h-full m-0 p-0 pb-10 bg-gradient-to-tr from-slate-900/40 via-slate-700/90 to-slate-400/40">

        <!-- Home -->
        <?php require __DIR__ . './views/pages/home.php' ?>

        <div class="backdrop-blur-sm">
            <!-- Services -->
            <?php require __DIR__ . './views/pages/service.php' ?>

            <!-- About -->
            <?php require __DIR__ . './views/pages/about.php' ?>

            <!-- Contact -->
            <?php require __DIR__ . './views/pages/contact.php' ?>
        </div>
    </main>

    <script src="./src/js/config.js"></script>
</body>

</html>
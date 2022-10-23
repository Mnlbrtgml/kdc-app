<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasilag Dental Clinic | Home</title>
    <link rel="stylesheet" href="../../src/css/output.css">
</head>

<body class="m-0 p-0 bg-fixed bg-cover bg-center bg-no-repeat transition-all text-sm bg-slate-50 text-slate-900 dark:bg-slate-900 dark:text-slate-50 md:text-base" style="background-image: url('../../public/resources/facade.jpg');">

    <!-- Navbar -->
    <?php require __DIR__ . "../../components/navbar.php"; ?>

    <!-- Sidebar -->
    <?php require __DIR__ . '../../components/sidebar.php'; ?>

    <main class="w-full h-full m-0 p-0 pb-10 bg-gradient-to-tr from-slate-900/40 via-slate-700/90 to-slate-400/40">

        <!-- Home -->
        <section class="w-full h-screen px-[30px] pt-[300px] md:px-[100px] md:pt-[400px] lg:px-[200px] lg:pt-[400px]" id="home">
            <div class="w-full md:w-[60%] lg:w-full">
                <p class="text-slate-100 text-3xl font-bold md:text-4xl lg:text-5xl">
                    Kasilag Dental Clinic
                </p>
                <p class="text-slate-200 italic md:text-lg lg:text-2xl">
                    Renew your smile
                </p>
                <a href="./pages/auth/login.php">
                    <button class="bg-blue-500 text-slate-50 text-base font-medium mt-4 px-5 py-3 rounded-lg dark:bg-blue-400 dark:text-slate-900 outline outline-1 outline-blue-300 hover:shadow-2xl dark:hover:outline-blue-400 dark:hover:bg-blue-500 transition-all">
                        Create an appointment
                    </button>
                </a>
            </div>
        </section>

        <div class="backdrop-blur-sm">
            <!-- Services -->
            <?php require __DIR__ . './service.php' ?>

            <!-- About -->
            <?php require __DIR__ . './about.php' ?>

            <!-- Contact -->
            <?php require __DIR__ . './contact.php' ?>
        </div>
    </main>

    <script src="../../src/js/config.js"></script>
</body>

</html>
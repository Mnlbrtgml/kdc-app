<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasilag Dental Clinic | Appointment</title>
    <link rel="stylesheet" href="../../src/css/output.css">
</head>

<body class="bg-slate-50 text-slate-900 text-sm dark:bg-slate-900 dark:text-slate-50 transition-all">

    <!-- Navbar -->
    <?php require __DIR__ . "../../components/navbar.php"; ?>

    <!-- Sidebar -->
    <?php require __DIR__ . '../../components/sidebar.php'; ?>

    <main class="w-full p-3 pt-[80px] flex items-center justify-center">
        <?php require __DIR__ . '../../components/list.php'; ?>
    </main>

    <!-- Search modal -->
    <div class="hidden" id="search-modal">
        <div class="w-full h-[80%] p-5 rounded-lg border dark:bg-slate-700 dark:border-slate-600">
            <input type="text" name="search" id="search" class="bg-slate-200 w-full mt-1 mb-5 px-3 py-2 rounded-lg border border-slate-300 placeholder:italic placeholder:text-slate-400 dark:bg-slate-600 dark:border-slate-500" placeholder="Search">

            <div class="overflow-scroll w-full max-h-[85%]">
                <?php
                for ($i = 0; $i < 20; $i++) {
                    echo "
                    <div class='w-full'>
                        <div class='w-full py-[6px] border-b border-slate-200 flex items center justify-between dark:text-slate-300 dark:border-slate-600'>
                            <button class='w-[70%] h-[28px] px-2 text-left truncate' id='appointment-modal-trigger'>
                                John Doe
                            </button>
                            <div>
                                <button class='bg-green-500 w-[28px] h-[28px] rounded'>
                                    <img src='../../img/check-light-mode.png' alt='' class='w-[16px] h-[16px] m-[6px] inline dark:hidden'>
                                    <img src='../../img/check-dark-mode.png' alt='' class='w-[16px] h-[16px] m-[6px] hidden dark:inline'>
                                </button>
                                <button class='bg-red-500 w-[28px] h-[28px] rounded'>
                                    <img src='../../img/x-light-mode.png' alt='' class='w-[16px] h-[16px] m-[6px] inline dark:hidden'>
                                    <img src='../../img/x-dark-mode.png' alt='' class='w-[16px] h-[16px] m-[6px] hidden dark:inline'>
                                </button>
                            </div>
                        </div>
                    </div>
                ";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Add button -->
    <button class="p-3 rounded-full shadow-lg fixed z-20 bottom-5 right-5 dark:bg-blue-400 dark:shadow-slate-900 lg:bottom-10 lg:right-10" id="add-modal-trigger">
        <img src='../../public/resources/add-light-mode.png' alt='' class='w-[24px] h-[24px] m-[6px] rounded-full inline dark:hidden'>
        <img src='../../public/resources/add-dark-mode.png' alt='' class='w-[24px] h-[24px] m-[6px] rounded-full hidden dark:inline'>
    </button>

    <!-- Add appointment modal -->
    <div class="bg-black/40 w-full h-full p-5 fixed z-50 top-0 left-0 items-center justify-center hidden" id="add-modal">
        <div class="w-1/2 h-[80%] p-5 rounded-lg border dark:bg-slate-700 dark:border-slate-600">
            <div class="">
                <p>Header</p>
            </div>

            <div class="">
                <p>Body</p>
            </div>

            <div class="">
                <p>Footer</p>
            </div>
        </div>
    </div>

    <!-- Appointment modal -->
    <div class="hidden" id="appointment-modal">
        <div class="w-full h-[80%] p-5 rounded-lg border dark:bg-slate-700 dark:border-slate-600">
            <div class="">
                <p>Header</p>
            </div>

            <div class="">
                <p>Body</p>
            </div>

            <div class="">
                <p>Footer</p>
            </div>
        </div>
    </div>

    <script src="../../src/js/config.js"></script>
</body>

</html>
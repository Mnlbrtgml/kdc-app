<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasilag Dental Clinic | Profile</title>
    <link rel="stylesheet" href="../../src/css/output.css">
</head>

<body class="bg-slate-50 text-slate-900 text-sm dark:bg-slate-900 dark:text-slate-50 transition-all">

    <!-- Navbar -->
    <?php require __DIR__ . "../../components/navbar.php"; ?>

    <!-- Sidebar -->
    <?php require __DIR__ . '../../components/sidebar.php'; ?>

    <main class="w-full p-3 pt-[80px] flex flex-col items-center">
        <!-- Profile picture div -->
        <div class="bg-slate-100 w-full mb-5 p-3 rounded-lg border border-slate-200 dark:bg-slate-700 dark:border-slate-600 lg:w-1/2">
            <p class="text-slate-50 mb-5 text-center font-medium">Profile Picture</p>

            <form action="" class="w-full flex flex-col items-center justify-center">
                <label class="w-[150px] h-[150px] mb-5 rounded-full dark:bg-slate-600">
                    <img src="../../public/resources/account-light-mode.png" alt="profile-icon" class="w-[150px] h-[150px] rounded-full dark:bg-slate-600">
                    <input type='file' class="hidden" />
                </label>

                <div class="w-full flex justify-end">
                    <button class="bg-blue-500 text-slate-50 w-1/2 text-base font-medium mt-4 px-5 py-2 rounded-lg dark:bg-blue-400 dark:text-slate-900" id="profile-picture-save" type="submit" name="save-picture-button">
                        Save
                    </button>
                </div>
            </form>
        </div>

        <!-- Account information div -->
        <div class="bg-slate-100 w-full mb-5 p-3 rounded-lg border border-slate-200 dark:bg-slate-700 dark:border-slate-600 lg:w-1/2">
            <p class="text-slate-50 mb-5 text-center font-medium">Account Information</p>

            <form action="" class="w-full flex flex-col items-center justify-center">
                <label for="name" class="w-full dark:text-slate-300">Full name</label>
                <input type="text" name="name" id="name" class="bg-slate-200 w-full mt-1 mb-1 px-3 py-2 rounded-lg border border-slate-300 placeholder:italic placeholder:text-slate-400 dark:bg-slate-600 dark:border-slate-500">

                <label for="number" class="w-full dark:text-slate-300">Contact number</label>
                <input type="number" name="number" id="number" class="bg-slate-200 w-full mt-1 mb-1 px-3 py-2 rounded-lg border border-slate-300 placeholder:italic placeholder:text-slate-400 dark:bg-slate-600 dark:border-slate-500">

                <label for="email" class="w-full dark:text-slate-300">Email address</label>
                <input type="email" name="email" id="email" class="bg-slate-200 w-full mt-1 mb-1 px-3 py-2 rounded-lg border border-slate-300 placeholder:italic placeholder:text-slate-400 dark:bg-slate-600 dark:border-slate-500">

                <div class="w-full flex justify-end">
                    <button class="bg-blue-500 text-slate-50 w-1/2 text-base font-medium mt-4 px-5 py-2 rounded-lg dark:bg-blue-400 dark:text-slate-900" id="account-information-save" type="submit" name="save-information-button">
                        Save
                    </button>
                </div>
            </form>
        </div>

        <!-- Change password div -->
        <div class="bg-slate-100 w-full p-3 rounded-lg border border-slate-200 dark:bg-slate-700 dark:border-slate-600 lg:w-1/2">
            <p class="text-slate-50 mb-5 text-center font-medium">Change password</p>

            <form action="" class="w-full flex flex-col items-center justify-center">
                <label for="name" class="w-full dark:text-slate-300">Current password</label>
                <input type="text" name="name" id="name" class="bg-slate-200 w-full mt-1 mb-1 px-3 py-2 rounded-lg border border-slate-300 placeholder:italic placeholder:text-slate-400 dark:bg-slate-600 dark:border-slate-500">

                <label for="name" class="w-full dark:text-slate-300">New password</label>
                <input type="text" name="name" id="name" class="bg-slate-200 w-full mt-1 mb-1 px-3 py-2 rounded-lg border border-slate-300 placeholder:italic placeholder:text-slate-400 dark:bg-slate-600 dark:border-slate-500">

                <label for="name" class="w-full dark:text-slate-300">Confirm new password</label>
                <input type="text" name="name" id="name" class="bg-slate-200 w-full mt-1 mb-1 px-3 py-2 rounded-lg border border-slate-300 placeholder:italic placeholder:text-slate-400 dark:bg-slate-600 dark:border-slate-500">

                <div class="w-full flex justify-end">
                    <button class="bg-blue-500 text-slate-50 w-1/2 text-base font-medium mt-4 px-5 py-2 rounded-lg dark:bg-blue-400 dark:text-slate-900" id="change-password-save" type="submit" name="save-password-button">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </main>

    <script src="../../js/script.js"></script>
</body>

</html>
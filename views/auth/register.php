<?php include_once '../../database/helpers/session-helper.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasilag Dental Clinic | Register</title>
    <link rel="stylesheet" href="../../src/css/output.css">
</head>

<body class="bg-slate-50 text-slate-900 text-sm dark:bg-slate-900 dark:text-slate-50 transition-all md:text-base">
    <main class="w-screen h-screen p-[30px] grid place-items-center md:px-[15%] lg:px-[35%]">
        <div class="bg-slate-100 w-full h-4/5 p-2 px-[30px] rounded-lg grid place-items-center border border-slate-200 dark:bg-slate-700 dark:border-slate-600 md:h-[90%]">
            <div class="w-full">
                <p class="mb-5 text-center text-lg uppercase font-medium">Create new account</p>
                <?php flash('register') ?>
                <form action="../../database/controllers/clients.php" method="POST" class="w-full py-2 grid">
                    <input type="hidden" name="text" value="register">
                    <input type="text" name="client_name" placeholder="Name" required class="bg-slate-50 w-full mb-2 px-3 py-2 rounded-lg outline outline-1 outline-slate-200 placeholder:text-slate-400 hover:bg-slate-200 hover:outline-slate-300 hover:shadow-lg focus:bg-slate-200 focus:outline-slate-300 focus:shadow-lg active:bg-slate-200 active:outline-slate-300 active:shadow-lg dark:bg-slate-500 dark:outline-slate-400 dark:hover:bg-slate-600 dark:hover:outline-slate-500 dark:focus:bg-slate-600 dark:focus:outline-slate-500 dark:active:bg-slate-600 dark:active:outline-slate-500 transition-all">
                    <input type="number" name="client_number" placeholder="Number" required maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="bg-slate-50 w-full mb-2 px-3 py-2 rounded-lg outline outline-1 outline-slate-200 placeholder:text-slate-400 hover:bg-slate-200 hover:outline-slate-300 hover:shadow-lg focus:bg-slate-200 focus:outline-slate-300 focus:shadow-lg active:bg-slate-200 active:outline-slate-300 active:shadow-lg dark:bg-slate-500 dark:outline-slate-400 dark:hover:bg-slate-600 dark:hover:outline-slate-500 dark:focus:bg-slate-600 dark:focus:outline-slate-500 dark:active:bg-slate-600 dark:active:outline-slate-500 transition-all appearance-none">
                    <input type="text" name="client_username" placeholder="Username" required class="bg-slate-50 w-full mb-2 px-3 py-2 rounded-lg outline outline-1 outline-slate-200 placeholder:text-slate-400 hover:bg-slate-200 hover:outline-slate-300 hover:shadow-lg focus:bg-slate-200 focus:outline-slate-300 focus:shadow-lg active:bg-slate-200 active:outline-slate-300 active:shadow-lg dark:bg-slate-500 dark:outline-slate-400 dark:hover:bg-slate-600 dark:hover:outline-slate-500 dark:focus:bg-slate-600 dark:focus:outline-slate-500 dark:active:bg-slate-600 dark:active:outline-slate-500 transition-all">
                    <input type="email" name="client_email" placeholder="Email" required class="bg-slate-50 w-full mb-2 px-3 py-2 rounded-lg outline outline-1 outline-slate-200 placeholder:text-slate-400 hover:bg-slate-200 hover:outline-slate-300 hover:shadow-lg focus:bg-slate-200 focus:outline-slate-300 focus:shadow-lg active:bg-slate-200 active:outline-slate-300 active:shadow-lg dark:bg-slate-500 dark:outline-slate-400 dark:hover:bg-slate-600 dark:hover:outline-slate-500 dark:focus:bg-slate-600 dark:focus:outline-slate-500 dark:active:bg-slate-600 dark:active:outline-slate-500 transition-all">
                    <input type="password" name="client_password" placeholder="Password" required class="bg-slate-50 w-full mb-2 px-3 py-2 rounded-lg outline outline-1 outline-slate-200 placeholder:text-slate-400 hover:bg-slate-200 hover:outline-slate-300 hover:shadow-lg focus:bg-slate-200 focus:outline-slate-300 focus:shadow-lg active:bg-slate-200 active:outline-slate-300 active:shadow-lg dark:bg-slate-500 dark:outline-slate-400 dark:hover:bg-slate-600 dark:hover:outline-slate-500 dark:focus:bg-slate-600 dark:focus:outline-slate-500 dark:active:bg-slate-600 dark:active:outline-slate-500 transition-all">
                    <input type="password" name="retype_password" placeholder="Re-type password" required class="bg-slate-50 w-full mb-5 px-3 py-2 rounded-lg outline outline-1 outline-slate-200 placeholder:text-slate-400 hover:bg-slate-200 hover:outline-slate-300 hover:shadow-lg focus:bg-slate-200 focus:outline-slate-300 focus:shadow-lg active:bg-slate-200 active:outline-slate-300 active:shadow-lg dark:bg-slate-500 dark:outline-slate-400 dark:hover:bg-slate-600 dark:hover:outline-slate-500 dark:focus:bg-slate-600 dark:focus:outline-slate-500 dark:active:bg-slate-600 dark:active:outline-slate-500 transition-all">
                    <button class="bg-blue-500 text-slate-50 w-full py-3 rounded-lg font-medium outline outline-1 outline-blue-600 hover:bg-blue-600 hover:outline-blue-700 hover:shadow-lg dark:bg-blue-400 dark:text-slate-900 dark:outline-blue-300 dark:hover:bg-blue-500 dark:hover:outline-blue-400 dark:hover:text-slate-800 transition-all">Register your account
                    </button>
                </form>
                <div class="w-full mt-2 text-center">
                    <a href="./signin.php" class="underline underline-offset-2">Return to sign in form</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
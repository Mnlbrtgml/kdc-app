<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasilag Dental Clinic | Sign in</title>
    <link rel="stylesheet" href="../../src/css/output.css">
</head>

<body class="bg-slate-50 text-slate-900 text-sm dark:bg-slate-900 dark:text-slate-50 transition-all md:text-base">
    <main class="w-screen h-screen p-[30px] grid place-items-center md:px-[15%] lg:px-[35%]">
        <div class="bg-slate-100 w-full h-4/5 p-2 px-[30px] rounded-lg grid place-items-center border border-slate-200 dark:bg-slate-700 dark:border-slate-600 md:h-[90%]">
            <div class="w-full">
                <div class="w-full mb-5 rounded-lg grid place-items-center">
                    <img src="../../public/resources/logo-large-dark-mode.png" alt="" class="inline dark:hidden">
                    <img src="../../public/resources/logo-large.png" alt="" class="hidden dark:inline">
                </div>
                <p class="mb-3 text-base text-center">Sign in to continue</p>
                <button class="bg-slate-200 w-full py-3 rounded-lg font-medium flex items-center justify-center gap-2 outline outline-1 outline-slate-300 hover:bg-slate-300 hover:outline-slate-400 dark:bg-slate-800 dark:outline-slate-600 dark:hover:bg-slate-900 dark:hover:outline-slate-800 hover:shadow-lg transition-all">
                    <span>
                        <img src="../../public/resources/google-light-mode.png" alt="google-icon" class="w-[12px] h-[12px] inline dark:hidden">
                        <img src="../../public/resources/google-dark-mode.png" alt="google-icon" class="w-[12px] h-[12px] hidden dark:inline">
                    </span> Continue with google account
                </button>
                <div class="w-full mt-5 mb-3 flex items-center gap-2">
                    <hr class="w-1/2 border-slate-900 dark:border-slate-50">
                    <p class="whitespace-nowrap text-center">or</p>
                    <hr class="w-1/2 border-slate-900 dark:border-slate-50">
                </div>
                <form action="" method="POST" class="w-full py-2 grid">
                    <input type="email" name="email" placeholder="Email" required class="bg-slate-50 w-full mb-2 px-3 py-2 rounded-lg outline outline-1 outline-slate-200 placeholder:text-slate-400 hover:bg-slate-200 hover:outline-slate-300 hover:shadow-lg focus:bg-slate-200 focus:outline-slate-300 focus:shadow-lg active:bg-slate-200 active:outline-slate-300 active:shadow-lg dark:bg-slate-500 dark:outline-slate-400 dark:hover:bg-slate-600 dark:hover:outline-slate-500 dark:focus:bg-slate-600 dark:focus:outline-slate-500 dark:active:bg-slate-600 dark:active:outline-slate-500 transition-all">
                    <input type="password" name="password" placeholder="Password" required class="bg-slate-50 w-full mb-5 px-3 py-2 rounded-lg outline outline-1 outline-slate-200 placeholder:text-slate-400 hover:bg-slate-200 hover:outline-slate-300 hover:shadow-lg focus:bg-slate-200 focus:outline-slate-300 focus:shadow-lg active:bg-slate-200 active:outline-slate-300 active:shadow-lg dark:bg-slate-500 dark:outline-slate-400 dark:hover:bg-slate-600 dark:hover:outline-slate-500 dark:focus:bg-slate-600 dark:focus:outline-slate-500 dark:active:bg-slate-600 dark:active:outline-slate-500 transition-all">
                    <button class="bg-blue-500 text-slate-50 w-full py-3 rounded-lg font-medium outline outline-1 outline-blue-600 hover:bg-blue-600 hover:outline-blue-700 hover:shadow-lg dark:bg-blue-400 dark:text-slate-900 dark:outline-blue-300 dark:hover:bg-blue-500 dark:hover:outline-blue-400 dark:hover:text-slate-800 transition-all">Sign in
                    </button>
                </form>
                <p class="mt-3 text-center">Don't have an account? <a href="./register.php" class="text-blue-500 dark:text-blue-400 dark:hover:text-blue-300 transition-all">Create account</a></p>
            </div>
        </div>
    </main>
</body>

</html>
<header class="bg-slate-400 w-full h-[60px] grid place-items-center fixed top-0 left-0 z-20 dark:bg-slate-500 dark:border-slate-300">
    <nav class="bg-slate-400 w-full h-[40px] flex items-center justify-between dark:bg-slate-500">
        <div class="h-full ml-[15px] flex gap-1">
            <button class="h-full lg:hidden transition-all" id="sidebar-trigger">
                <img src="../../public/resources/kebab-light-mode.png" alt="" class="h-2/3 inline dark:hidden lg:hidden">
                <img src="../../public/resources/kebab-dark-mode.png" alt="" class="h-2/3 hidden dark:inline lg:hidden">
            </button>
            <a href="" class="h-full flex items-center gap-1 text-base font-bold uppercase">
                <img src="../../public/resources/logo-large.png" alt="logo" class="h-full inline dark:hidden">
                <img src="../../public/resources/logo-large-dark-mode.png" alt="logo" class="h-full hidden dark:inline">
                <p class="text-slate-50 hidden dark:text-slate-900 lg:inline">Kasilag Dental Clinic</p>
            </a>
        </div>
        <div class="lg:flex">
            <ul class="hidden lg:flex gap-2">
                <li>
                    <a href="../pages/home.php" class="w-full px-3 py-2 rounded-lg flex items-center text-base hover:bg-slate-50 dark:hover:bg-slate-900 transition-all">
                        Home
                    </a>
                </li>
                <li>
                    <a href="../pages/appointment.php" class="w-full px-3 py-2 rounded-lg flex items-center text-base hover:bg-slate-50 dark:hover:bg-slate-900 transition-all">
                        Appointment
                    </a>
                </li>
                <li>
                    <a href="../pages/profile.php" class="w-full px-3 py-2 rounded-lg flex items-center text-base hover:bg-slate-50 dark:hover:bg-slate-900 transition-all">
                        Profile
                    </a>
                </li>
            </ul>

            <div class="ml-[12px] mr-[30px] pl-3 flex items-center gap-2 lg:border-l">
                <button class="bg-slate-50 px-3 py-2 rounded-lg font-medium outline outline-1 outline-slate-300 hover:bg-slate-200 hover:outline-slate-600 dark:bg-slate-900 dark:outline-slate-600 dark:hover:bg-slate-700 dark:hover:outline-slate-300 transition-all uppercase">
                    Log out
                </button>

                <!-- <button class="bg-slate-50 w-[32px] h-[32px] rounded-full outline outline-1 outline-slate-300 hover:bg-slate-200 hover:outline-slate-600 dark:bg-slate-900 dark:outline-slate-600 dark:hover:bg-slate-700 dark:hover:outline-slate-300 transition-all group grid" id="toggle-mode">
                    <div class="w-[24px] h-[24px] m-auto rounded-full group-hover:w-[22px] group-hover:h-[22px]">
                        <img src="../../public/resources/dark-mode.png" alt="light-mode" class="w-full h-full m-auto block dark:hidden">
                        <img src="../../public/resources/light-mode.png" alt="light-mode" class="w-full h-full m-auto hidden dark:block">
                    </div>
                </button> -->
            </div>
        </div>
    </nav>
</header>
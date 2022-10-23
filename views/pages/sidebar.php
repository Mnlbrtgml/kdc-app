<div class="bg-black/80 w-full h-full fixed z-50 top-0 left-0 flex-row justify-between transition-all hidden" id="sidebar">
    <div class="bg-slate-500 text-slate-50 w-[80%] h-full p-5 dark:bg-slate-700 flex flex-col justify-between md:w-1/2">
        <div class="w-full">
            <!-- <div class="w-full flex justify-end">
                <div class="w-[40px] h-[40px] rounded-full hover:outline outline-1 outline-slate-900 dark:outline-slate-50 transition-all">
                    <button class="bg-slate-50 w-[40px] h-[40px] rounded-full dark:bg-slate-900" id="toggle-mode">
                        <img src="./public/resources/dark-mode.png" alt="light-mode" class="w-[24px] h-[24px] m-auto block dark:hidden">
                        <img src="./public/resources/light-mode.png" alt="light-mode" class="w-[24px] h-[24px] m-auto hidden dark:block">
                    </button>
                </div>
            </div> -->
            <div class="w-full mb-16">
                <img src="./public/resources/logo-large-dark-mode.png" alt="logo-icon" class="inline dark:hidden">
                <img src="./public/resources/logo-large.png" alt="logo-icon" class="hidden dark:inline">
            </div>
            <ul class="w-full p-5 text-slate-900 dark:text-slate-50">
                <li class="w-full">
                    <a href="#home" class="w-full mb-2 px-3 py-2 rounded-lg flex items-center text-base hover:bg-slate-300 dark:hover:bg-slate-900 transition-all" id="sidebar-home">
                        <span class="w-6 h-6 mr-5 inline dark:hidden">
                            <img src="./public/resources/home-light-mode.png" alt="home-icon" class="w-6 h-6">
                        </span>
                        <span class="w-6 h-6 mr-5 hidden dark:inline">
                            <img src="./public/resources/home-dark-mode.png" alt="home-icon" class="w-6 h-6">
                        </span>
                        Home
                    </a>
                </li>
                <li class="w-full">
                    <a href="#service" class="w-full mb-2 px-3 py-2 rounded-lg flex items-center text-base hover:bg-slate-300 dark:hover:bg-slate-900 transition-all" id="sidebar-service">
                        <span class="w-6 h-6 mr-5 inline dark:hidden">
                            <img src="./public/resources/stethoscope-light-mode.png" alt="home-icon" class="w-6 h-6">
                        </span>
                        <span class="w-6 h-6 mr-5 hidden dark:inline">
                            <img src="./public/resources/stethoscope-dark-mode.png" alt="home-icon" class="w-6 h-6">
                        </span>
                        Service
                    </a>
                </li>
                <li class="w-full">
                    <a href="#about" class="w-full mb-2 px-3 py-2 rounded-lg flex items-center text-base hover:bg-slate-300 dark:hover:bg-slate-900 transition-all" id="sidebar-about">
                        <span class="w-6 h-6 mr-5 inline dark:hidden">
                            <img src="./public/resources/info-light-mode.png" alt="home-icon" class="w-6 h-6">
                        </span>
                        <span class="w-6 h-6 mr-5 hidden dark:inline">
                            <img src="./public/resources/info-dark-mode.png" alt="home-icon" class="w-6 h-6">
                        </span>
                        About
                    </a>
                </li>
                <li class="w-full">
                    <a href="#contact" class="w-full mb-2 px-3 py-2 rounded-lg flex items-center text-base hover:bg-slate-300 dark:hover:bg-slate-900 transition-all" id="sidebar-contact">
                        <span class="w-6 h-6 mr-5 inline dark:hidden">
                            <img src="./public/resources/phone-light-mode.png" alt="home-icon" class="w-6 h-6">
                        </span>
                        <span class="w-6 h-6 mr-5 hidden dark:inline">
                            <img src="./public/resources/phone-dark-mode.png" alt="home-icon" class="w-6 h-6">
                        </span>
                        Contact
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-full px-10">
            <a href="./views/auth/signin.php" class="w-full mr-[30px]">
                <button class="bg-slate-50 text-slate-900 w-full px-3 py-2 rounded-lg font-medium outline outline-1 outline-slate-100 hover:bg-slate-200 hover:outline-slate-400 dark:bg-slate-900 dark:text-slate-50 dark:hover:bg-slate-600 dark:hover:text-slate-400 dark:hover:outline-slate-500 transition-all">
                    SIGN IN
                </button>
            </a>
        </div>
    </div>
</div>
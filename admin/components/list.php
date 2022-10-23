<div class="bg-slate-100 w-full px-3 py-3 pb-5 rounded-lg border border-slate-200 dark:bg-slate-700 dark:border-slate-600 lg:w-[70%]">
    <p class="mb-2 pb-2 font-medium text-center border-b border-slate-900 dark:border-slate-500 uppercase">Appointment list</p>

    <div class="w-full mb-2 p-1 flex items-center justify-end gap-2">
        <label for="filter-appointment" class="text-slate-700 dark:text-slate-200">Filter by:</label>
        <select name="" id="filter-appointment" class="bg-slate-200 w-2/3 md:w-1/3 lg:w-1/4 p-2 rounded-lg border border-slate-300 appearance-none dark:bg-slate-800 dark:border-slate-600">
            <option value="all">All</option>
            <option value="accepted">Teeth Whitening</option>
            <option value="pending">Teeth Cleaning</option>
            <option value="all">Orthodontic Treatment</option>
            <option value="accepted">Modern Dentistry Services</option>
            <option value="pending">Teeth/Dental Bonding</option>
            <option value="all">Cosmetic Fillings</option>
            <option value="accepted">Dentures</option>
            <option value="pending">Root Canal Therapy</option>
        </select>
    </div>

    <?php
    for ($i = 0; $i < 20; $i++) {
        echo "
                    <div class='w-full'>
                        <div class='w-full py-[6px] border-b border-slate-200 flex items center justify-between dark:text-slate-300 dark:border-slate-600'>
                            <button class='w-[70%] h-[28px] px-2 text-left truncate appointment-modal-trigger' id='appointment-modal-trigger'>
                                John Doe
                            </button>
                            <div>
                                <button class='bg-green-500 w-[28px] h-[28px] rounded'>
                                    <img src='../../public/resources/check-light-mode.png' alt='' class='w-[16px] h-[16px] m-[6px] inline dark:hidden'>
                                    <img src='../../public/resources/check-dark-mode.png' alt='' class='w-[16px] h-[16px] m-[6px] hidden dark:inline'>
                                </button>
                                <button class='bg-red-500 w-[28px] h-[28px] rounded'>
                                    <img src='../../public/resources/x-light-mode.png' alt='' class='w-[16px] h-[16px] m-[6px] inline dark:hidden'>
                                    <img src='../../public/resources/x-dark-mode.png' alt='' class='w-[16px] h-[16px] m-[6px] hidden dark:inline'>
                                </button>
                            </div>
                        </div>
                    </div>
                ";
    }
    ?>
</div>
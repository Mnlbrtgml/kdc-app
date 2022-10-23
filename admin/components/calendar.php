<table class="w-full rounded-lg table-fixed">
    <thead class="h-[50px] border-b border-slate-900 dark:border-slate-500">
        <tr class="w-full h-[50px] ">
            <th colspan="2" class="rounded-tl-lg">
                <button class="w-full h-full grid place-items-center">
                    <img src="../../public/resources/left-light-mode.png" alt="left-icon" class="w-[24px] h-[24px] inline dark:hidden">
                    <img src="../../public/resources/left-dark-mode.png" alt="left-icon" class="w-[24px] h-[24px] hidden dark:inline">
                </button>
            </th>
            <th colspan="3">
                <button class="w-full h-full uppercase">
                    <?php
                    $monthNum = date("m");
                    $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
                    echo $monthName . " " . date("Y");
                    ?>
                </button>
            </th>
            <th colspan="2" class="rounded-tr-lg">
                <button class="w-full h-full grid place-items-center">
                    <img src="../../public/resources/right-light-mode.png" alt="left-icon" class="w-[24px] h-[24px] inline dark:hidden">
                    <img src="../../public/resources/right-dark-mode.png" alt="left-icon" class="w-[24px] h-[24px] hidden dark:inline">
                </button>
            </th>
        </tr>
    </thead>
    <tbody class="w-full h-full">
        <tr class="w-full h-[50px]">
            <th>S</th>
            <th>M</th>
            <th>T</th>
            <th>W</th>
            <th>T</th>
            <th>F</th>
            <th>S</th>
        </tr>

        <?php

        function build_calendar($month, $year, $dateArray)
        {

            // Create array containing abbreviations of days of week.
            $daysOfWeek = array('S', 'M', 'T', 'W', 'T', 'F', 'S');

            // What is the first day of the month in question?
            $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

            // How many days does this month contain?
            $numberDays = date('t', $firstDayOfMonth);

            // Retrieve some information about the first day of the
            // month in question.
            $dateComponents = getdate($firstDayOfMonth);

            // What is the name of the month in question?
            $monthName = $dateComponents['month'];

            // What is the index value (0-6) of the first day of the
            // month in question.
            $dayOfWeek = $dateComponents['wday'];

            // Create the table tag opener and day headers

            $calendar = "<tr>";

            // Create the rest of the calendar

            // Initiate the day counter, starting with the 1st.

            $currentDay = 1;

            $calendar .= "</tr><tr>";

            // The variable $dayOfWeek is used to
            // ensure that the calendar
            // display consists of exactly 7 columns.

            if ($dayOfWeek > 0) {
                $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
            }

            $month = str_pad($month, 2, "0", STR_PAD_LEFT);
            $today_date = date("d");
            $today_date = ltrim($today_date, '0');


            while ($currentDay <= $numberDays) {

                // Seventh column (Saturday) reached. Start a new row.

                if ($dayOfWeek == 7) {

                    $dayOfWeek = 0;
                    $calendar .= "</tr><tr>";
                }

                $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);

                $date = "$year-$month-$currentDayRel";

                if ($currentDayRel == $today_date) {
                    $calendar .= "<td class='bg-green-500 text-slate-100 h-[40px] font-bold text-center dark:bg-green-400 dark:text-slate-900 leading-3' rel='$date'>
                                        $currentDay
                                        <div class='text-xs font-normal'>6 appointments</div>
                                    </td>";
                } else {
                    $calendar .= "<td class='h-[40px] text-center text-slate-700 dark:text-slate-300' rel='$date'>$currentDay</td>";
                }

                // Increment counters

                $currentDay++;
                $dayOfWeek++;
            }


            // Complete the row of the last week in month, if necessary

            if ($dayOfWeek != 7) {

                $remainingDays = 7 - $dayOfWeek;
                $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
            }

            $calendar .= "</tr>";

            $calendar .= "</table>";

            return $calendar;
        }

        $dateComponents = getdate();

        $month = $dateComponents['mon'];
        $year = $dateComponents['year'];
        $dateArray = $dateComponents;

        echo build_calendar($month, $year, $dateArray);
        ?>
    </tbody>
</table>
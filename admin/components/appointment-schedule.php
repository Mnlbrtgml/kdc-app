<p class="mb-5 pb-2 font-medium text-center border-b border-slate-900 dark:border-slate-500 uppercase">Today's appointment schedule</p>

<div class="max-h-[90%] overflow-auto px-3">
    <?php
    $colors = array(array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")), array("John Doe", date("h:i a")));

    $count = 0;

    foreach ($colors as $value) {
        $count += 1;
        echo "<div class='text-slate-700 w-full flex items-center justify-between dark:text-slate-300'><p class='w-2/3 truncate'>$count. $value[0]</p><p>$value[1]</p></div>";
    }
    ?>
</div>
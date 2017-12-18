<body>
<?php foreach ($indexMonths as $month => $daysID):
//    var_dump($month);
//    $noDouble = $days->days;
    $noDouble = null;
    ?>
    <h1><?php
        switch ($month) {
            case 1:
                echo "<h1>Januari</h1>";
                break;
            case 2:
                echo "<h1>Februari</h1>";
                break;
            case 3:
                echo "<h1>Maart</h1>";
                break;
            case 4:
                echo "<h1>April</h1>";
                break;
            case 5:
                echo "<h1>Mei</h1>";
                break;
            case 6:
                echo "<h1>Juni</h1>";
                break;
            case 7:
                echo "<h1>Juli</h1>";
                break;
            case 8:
                echo "<h1>Augustus</h1>";
                break;
            case 9:
                echo "<h1>September</h1>";
                break;
            case 10:
                echo "<h1>October</h1>";
                break;

            case 11:
                echo "<h1>November</h1>";
                break;
            case 12:
                echo "<h1>December</h1>";
                break;
        }
        ?></h1>


    <?php foreach ($daysID as $dayTitle):;

    ?>

    <h2> <?php
    if ($noDouble !== $dayTitle->days) {
        echo $dayTitle->days;


        ?>
        </h2>
        <?php
        foreach ($daysID as $day):
            if ($dayTitle->days === $day->days) { ?>
                <p>
                    <a href="<?php echo site_url('news/edit/' . $day->slug); ?>">
                        <?php echo $day->person . " (" . $day->year . ")" ?></a>
                    <a href="<?php echo site_url('news/delete/' . $day->slug); ?>">x</a>

                </p>
            <?php }endforeach;
    }
    $noDouble = $dayTitle->days;

endforeach; endforeach;;

?>


<p><a href="news/create">+ Toevoegen</a></p>
</body>
<body>
<?php foreach ($indexMonths as $month => $days): ?>
    <span class="year"><?php echo $month ; ?></span>
    <?php foreach ($days as $day): ?>
        <div class="ar_nom">
            <a href="<?php echo site_url('news/edit/' . $day->slug); ?>">">
                <?php echo $day->person . $day->year ?></a>
            <a href="<?php echo site_url('news/delete/' . $day->slug); ?>">">x</a>

        </div>

    <?php  endforeach; endforeach;?>


<p><a href="news/create">+ Toevoegen</a></p>
</body>
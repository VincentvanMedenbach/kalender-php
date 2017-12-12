<body>


<?php foreach ($news as $news_item): ?>
    <p>
        <a href="edit.php?">
            <?php echo $news_item['person']." (".$news_item['year'].")" ?></a>

        <a href="delete.php?id=4">x</a>
    </p>


    <p><a href="<?php echo site_url('news/' . $news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>
<p><a href="news/create">+ Toevoegen</a></p>
</body>
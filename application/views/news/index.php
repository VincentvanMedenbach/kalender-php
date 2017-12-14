<body>


<?php foreach ($news as $news_item): ?>
    <p>
        <a href="<?php echo site_url('news/edit/' . $news_item['slug']); ?>">">
            <?php echo $news_item['person']." (".$news_item['year'].")" ?></a>

        <a href="<?php echo site_url('news/delete/' . $news_item['slug']); ?>">">x</a>
    </p>

<?php endforeach; ?>
<p><a href="news/create">+ Toevoegen</a></p>
</body>
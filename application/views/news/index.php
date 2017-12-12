<body>

<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

    <h3><?php echo $news_item['title']; ?></h3>
    <p>
        <a href="">
            <?php echo $news_item['text']; ?>
        </a>
    </p>
    <p><a href="<?php echo site_url('news/' . $news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>
<p><a href="news/create">+ Toevoegen</a></p>
</body>
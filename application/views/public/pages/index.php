<?php if($featured_pages) : ?>
    <?php foreach($featured_pages as $page) : ?>
        <div class="featured-page">
            <h2 class="page-header"><?= $page->title; ?></h2>
            <?= $page->body; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
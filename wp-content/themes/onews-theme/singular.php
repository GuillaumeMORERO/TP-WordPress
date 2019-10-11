<?php
get_header();
the_post(); 
?>
<!-- emmet: h2+article*6>a+h3+div>(img+strong+time)+p+a -->
<h2 class="right__title"><?php the_title(); ?></h2>
<div class="posts">
    <article class="post post--solo">
    <?php
    $categories = get_the_category();
    foreach ($categories as $category) : ?>
        <a href="<?= get_category_link($category->term_id); ?>" class="post__category post__category--color-<?= strtolower($category->name) ?>"><?= $category->name ?></a>
    <?php endforeach; ?>
    <div class="post__meta">
        <?= get_avatar(get_the_author_email(), '60', null, null, ['class' => 'post__author-icon'] ) ?>
        <strong class="post__author"><?php the_author(); ?></strong>

        <?php $date = new DateTime(strtotime(get_the_date())); 
        // $date = DateTime::createFromFormat('M d, Y', get_the_date());
        ?>
        <time datetime="<?= $date->format('Y-m-d'); ?>">le <?= get_the_date(); ?></time>
    </div>
    <p><?php the_content(); ?></p>
    <a href="<?= home_url(); ?>" class="post__link">Back to home</a>
    </article>
</div>
<?php get_footer(); ?>
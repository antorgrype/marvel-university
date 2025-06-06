<?php
get_header();
while (have_posts()) {
    the_post(); ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(images/ocean.jpg)"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?= the_title(); ?></h1>
            <div class="page-banner__intro">
                <p>Change me later by adding option</p>
            </div>
        </div>
    </div>
    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?= site_url('/blog') ?>"><i class="fa fa-home"
                        aria-hidden="true"></i> Back to Blog</a> <span class="metabox__main">Posted by
                    <?= the_author_posts_link() ?> on <?= the_time('y-m-d H:i') ?> on <?= the_category(', ') ?></span>
            </p>
        </div>
        <div class="generic-content">
            <p><?= the_content(); ?></p>
        </div>
    </div>

<?php }

get_footer();
?>
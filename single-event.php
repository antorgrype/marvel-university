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
                <a class="metabox__blog-home-link" href="<?= get_post_type_archive_link('event') ?>"><i class="fa fa-home"
                        aria-hidden="true"></i> Events Home</a> <span class="metabox__main"><?= the_title(); ?></span>
            </p>
        </div>
        <div class="generic-content">
            <p><?= the_content(); ?></p>
        </div>
    </div>

<?php }

get_footer();
?>
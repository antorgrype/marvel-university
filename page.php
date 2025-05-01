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
        <?php
        $theParentId = wp_get_post_parent_id(get_the_ID());
        if ($theParentId) { ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href="<?= get_permalink($theParentId) ?>"><i class="fa fa-home"
                            aria-hidden="true"></i> Back to <?= get_the_title($theParentId) ?></a> <span
                        class="metabox__main"><?= the_title(); ?></span>
                </p>
            </div>
        <?php } ?>

        <?php 
        $hasChild = get_pages([
            'child_of' => get_the_ID(),
        ]);
        if($theParentId || $hasChild) { ?>
        <div class="page-links">
            <h2 class="page-links__title"><a href="<?= get_permalink($theParentId) ?>"><?= get_the_title($theParentId) ?></a></h2>
            <ul class="min-list">
                <?php
                    wp_list_pages([
                        'title_li' => null,
                        'child_of' => $theParentId ? $theParentId : get_the_ID(),
                        'sort_column' => 'menu_order',
                    ])
                ?>
            </ul>
        </div>
        <?php } ?>

        <div class="generic-content">
            <p><?= the_content(); ?></p>
        </div>
    </div>

    <?php
    get_footer();
}
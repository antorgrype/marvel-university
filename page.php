<?php
get_header();

while (have_posts()) {
    the_post(); ?>
    <h1>This is a page</h1>
    <h3><?= the_title() ?></h3>
    <p><?= the_content() ?></p>
    <hr>
    <?php

    get_footer();
}
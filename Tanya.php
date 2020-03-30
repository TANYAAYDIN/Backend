<?php

// Template Name: tanya

<?php do_action('tanya');?>


$pages = get_pages();
    echo '<p>LISTE</p>';
    foreach ( $pages as $page ) {
        echo($page->post_title . '<br>');
    }
    echo 'DEBUG';
    echo '<pre>';
    print_r($pages);
    echo'</pre>';

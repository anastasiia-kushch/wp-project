<?php 
$posts = get_posts(array(
    'numberposts' => -1,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC'
)); 
?>
<div class="flex" style="display: flex;">
    <?php foreach ($posts as $post) {
        setup_postdata($post); 
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
        style="background: #f4f4f4; padding: 30px; margin: 30px; width: 300px; ">
        <?php
        the_title('<h1 class="entry-title">', '</h1>');
        the_content();
        // tags
        if(has_tag()) {
            echo '<p class="tags">';
            the_tags();
            echo '</p>';
        }
        // categories
        if(has_category()) {
            echo '<p class="categories">';
            the_category();
            echo '</p>';
        }
        // excerpt
        if(has_excerpt()) {
            echo '<p class="excerpt">';
            the_excerpt();
            echo '</p>';
        }
        ?>
    </article>
    <?php 
    } // Закрываем foreach
    wp_reset_postdata(); 
    ?>
</div>
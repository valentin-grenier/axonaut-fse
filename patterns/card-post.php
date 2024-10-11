<?php

/**
 * Title: card-post
 * Slug: axonaut-fse/card-post
 * Categories: Posts
 */
?>
<!-- wp:group {"style":{"border":{"radius":"16px"}},"backgroundColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:16px"><!-- wp:post-featured-image {"style":{"border":{"radius":"16px"}}} /-->

    <!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-title /-->

        <!-- wp:post-excerpt /-->

        <!-- wp:group {"metadata":{"name":"Bottom"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:post-date /-->

            <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-tertiary"} -->
                <div class="wp-block-button is-style-button-tertiary"><a class="wp-block-button__link wp-element-button" href="<!-- wp:post-link /-->">Lire l'article</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
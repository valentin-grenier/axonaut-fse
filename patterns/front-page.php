<?php
/**
 * Title: front-page
 * Slug: axonaut-fse/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"metadata":{"name":"Hero"},"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"categories":["Banners"],"patternName":"axonaut-fse/hero","name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:700">Axonaut Blog<br>Le blog des entrepreneurs</h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-radius:12px;padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Dernières tendances"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"24px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-white-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"m","fontFamily":"montserrat"} -->
<p class="has-text-align-center has-montserrat-font-family has-m-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">Les dernières tendances</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/500" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/500" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
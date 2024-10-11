<?php

// === Enqueue default block styles removal script
function axonaut_remove_block_styles()
{
    wp_enqueue_script(
        'remove-button-styles',
        get_template_directory_uri() . '/assets/js/remove-block-styles.js', // Adjust path as necessary
        array('wp-blocks', 'wp-dom'),
        filemtime(get_template_directory() . '/assets/js/remove-block-styles.js'), // For cache-busting
        true
    );
}
add_action('enqueue_block_editor_assets', 'axonaut_remove_block_styles');

// === Remove default patterns
add_action('after_setup_theme', function () {
    remove_theme_support('core-block-patterns');
});

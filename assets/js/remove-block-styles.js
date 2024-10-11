wp.domReady(() => {
	// == Outputs all block and their proper block styles in the console
	// wp.blocks.getBlockTypes().forEach((block) => {
	// 	if (_.isArray(block['styles'])) {
	// 		console.log(block.name, _.pluck(block['styles'], 'name'));
	// 	}
	// });

	// == Remove button native block styles
	wp.blocks.unregisterBlockStyle('core/button', 'fill');
	wp.blocks.unregisterBlockStyle('core/button', 'outline');
	wp.blocks.unregisterBlockStyle('core/image', 'rounded');
});

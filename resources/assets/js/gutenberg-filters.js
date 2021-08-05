/* Register/Unregister Gutenberg block styles */
/* https://www.billerickson.net/block-styles-in-gutenberg/ */

wp.domReady( () => {
    wp.blocks.unregisterBlockStyle(
        'core/button',
        [ 'default', 'outline', 'squared', 'fill' ]
    );

    wp.blocks.registerBlockStyle(
        'core/button',
        [
            {
                name: 'default',
                label: 'Default',
                isDefault: true,
            },
            {
                name: 'outline',
                label: 'Outline',
            }
        ]
    );

    wp.blocks.unregisterBlockStyle(
        'core/image',
        [ 'default', 'rounded' ]
    );

    wp.blocks.registerBlockStyle(
        'core/image',
        [
            {
                name: 'default',
                label: 'Default',
                isDefault: true,
            },
            {
                name: 'thumbnail',
                label: 'Thumbnail',
                isDefault: true,
            }
        ]
    );

    wp.blocks.unregisterBlockStyle(
        'core/separator',
        ['dots', 'wide' ]
    );

    wp.blocks.unregisterBlockStyle('core/table', 'stripes');

    /* Core embeds https://newbedev.com/how-to-remove-the-core-embed-blocks-in-wordpress-5-6 */
    const allowedEmbedBlocks = [
        'twitter',
        'youtube',
    ];
    wp.blocks.getBlockVariations('core/embed').forEach(function (blockVariation) {
        if (-1 === allowedEmbedBlocks.indexOf(blockVariation.name)) {
            wp.blocks.unregisterBlockVariation('core/embed', blockVariation.name);
        }
    });
});

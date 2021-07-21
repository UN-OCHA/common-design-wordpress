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
            },
            {
                name: 'small',
                label: 'Small',
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
} );

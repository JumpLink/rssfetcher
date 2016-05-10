<?php

return [
    'plugin' => [
        'name' => 'RSS Fetcher',
        'description' => 'Fetches RSS items from various sources to put on your website',
    ],
    'permissions' => [
        'access_sources' => 'Manage sources',
        'access_items' => 'Manege items',
        'access_import_export' => 'Allowed to import and export',
    ],
    'navigation' => [
        'menu_label' => 'RSS Fetcher',
        'side_menu_label_sources' => 'Sources',
        'side_menu_label_items' => 'Items',
        'side_menu_label_feeds' => 'Feeds',
    ],
    'source' => [
        'source' => 'Source',
        'sources' => 'Sources',
        'title' => 'Title',
        'link' => 'Link',
        'description' => 'Description',
        'author' => 'Author',
        'category' => 'Category',
        'comments' => 'Comments',
        'published_at' => 'Published At',
        'is_published' => 'Published',
        'is_published_comment' => 'Flick this switch to publish this item',
        'source_not_enabled' => 'Source is not enabled, please enabled it first',
        'items_fetch_success' => 'Successfully fetched RSS items for this source',
        'items_fetch_fail' => 'An error has occurred while fetching RSS items: :error',
        'new_source' => 'New Source',
        'create_source' => 'Create Source',
        'edit_source' => 'Edit Source',
        'manage_sources' => 'Manage Sources',
        'return_to_sources' => 'Return to sources list',
        'fetch_items' => 'Fetch items',
        'fetching_items' => 'Fetching items...',
        'delete_confirm' => 'Are you sure?',
        'import_sources' => 'Import sources',
        'export_sources' => 'Export sources',
        'update_existing_sources' => 'Update existing sources',
        'update_existing_sources_comment' => 'Check this box to update sources that have exactly the same ID.',
    ],
    'item' => [
        'item' => 'Item',
        'items' => 'Items',
        'name' => 'Name',
        'source_url' => 'Source URL',
        'max_items' => 'Max Items',
        'max_items_description' => 'Maximum items to fetch from source',
        'items_per_page' => 'Number of items per page',
        'items_per_page_validation' => 'Invalid format of the items per page value',
        'enabled' => 'Enabled',
        'enabled_comment' => 'Flick this switch to enable this RSS source',
        'publish_new_items' => 'Publish new fetched items',
        'description' => 'Description',
        'items_count' => '# items',
        'last_fetched' => 'Last fetched',
        'new_item' => 'New Item',
        'create_item' => 'Create Item',
        'edit_item' => 'Edit Item',
        'manage_items' => 'Manage Items',
        'return_to_items' => 'Return to items list',
        'delete_confirm' => 'Are you sure?',
        'hide_published' => 'Hide published',
    ],
    'feed' => [
        'feed' => 'Feed',
        'feeds' => 'Feeds',
        'title' => 'Title',
        'type' => 'Type',
        'description' => 'Description',
        'path' => 'Path',
        'path_placeholder' => 'path/to/feed',
        'path_comment' => 'Enter the relative path where this feed should be available. E.g. news/financial/latest',
        'sources' => 'Sources',
        'sources_comment' => 'Select the sources that should be included in this feed',
        'enabled' => 'Enabled',
        'enabled_comment' => 'Flick this switch to enable this feed',
        'max_items' => 'Maximum number of items in feed',
        'new_feed' => 'New Feed',
        'return_to_feeds' => 'Return to feeds list',
        'delete_confirm' => 'Are you sure?',
        'manage_feeds' => 'Manage Feeds',
        'create_feed' => 'Create Feed',
        'edit_feed' => 'Edit Feed',
    ],
    'component' => [
        'item_list' => [
            'name' => 'Item List',
            'description' => 'Displays a list of latest RSS items.',
        ],
        'paginatable_item_list' => [
            'name' => 'Paginatable Item List',
            'description' => 'Displays a paginatable list of RSS items.',
        ],
        'source_list' => [
            'name' => 'Source List',
            'description' => 'Displays a list of sources.',
        ],
    ],
    'report_widget' => [
        'headlines' => [
            'name' => 'RSS Item Widget',
            'description' => 'Shows the latest fetched RSS items',
            'title_title' => 'Widget title',
            'title_default' => 'Latest Headlines',
            'title_required' => 'Widget title is required',
            'max_items_title' => 'Number of items to display',
            'date_format_title' => 'Date format',
            'date_format_description' => 'Please check official PHP documentation on date formatting on php.net.',
        ],
    ],
];

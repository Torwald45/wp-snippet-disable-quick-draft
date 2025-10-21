# WP Snippet: Disable Quick Draft

Removes the Quick Draft widget from WordPress dashboard for a cleaner admin interface.

## Features

- Removes Quick Draft widget from dashboard
- Cleaner admin interface
- No configuration needed
- Lightweight (single action hook)

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher

## Installation

### Method 1: functions.php

1. Open your theme's functions.php file
2. Copy the entire content from disable-quick-draft.php
3. Paste at the end of your functions.php
4. Save the file

### Method 2: Code Snippets Plugin

1. Install and activate the Code Snippets plugin
2. Go to Snippets - Add New
3. Copy content from disable-quick-draft.php WITHOUT the opening php tag
4. Paste into the Code field
5. Activate the snippet

## Usage

After installation, the Quick Draft widget will be automatically removed from your WordPress dashboard.

To verify:
1. Go to WordPress Dashboard
2. Quick Draft widget should not be visible in the sidebar

## What is Quick Draft?

Quick Draft is a dashboard widget that allows you to quickly create draft posts. Many users don't use this feature and prefer a cleaner dashboard interface.

## Technical Details

### Metabox
- Metabox ID: dashboard_quick_press
- Location: dashboard
- Context: side

### Functions
- torwald45_quickdraft_disable_widget() - removes Quick Draft metabox

### Hooks Used
- wp_dashboard_setup (removes metabox during dashboard setup)

## Reverting

To restore Quick Draft widget:
1. Remove the snippet from functions.php
2. Or deactivate the snippet in Code Snippets plugin
3. Refresh dashboard

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for version history.

## License

GPL v2 or later

## Author

[Torwald45](https://github.com/Torwald45)

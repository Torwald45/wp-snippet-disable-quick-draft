# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [2.0.0] - 2025-10-21

### Changed
- **BREAKING CHANGE:** Repository renamed from WP-Snippet-Disabling-Quick-Draft-in-WordPress to wp-snippet-disable-quick-draft
- Script renamed from WP-Snippet-Disabling-Quick-Draft-in-WordPress.php to disable-quick-draft.php
- Function renamed from disable_quick_draft() to torwald45_quickdraft_disable_widget()
- Added unique two-level prefixes (torwald45_quickdraft_)

### Added
- Script header with author, license, version information
- CHANGELOG.md for version tracking
- LICENSE file (GPL v2 or later)
- .gitignore file
- Complete README.md in English with Technical Details
- Installation instructions
- Usage guide

### Technical
- No database changes (dashboard widget removal only)
- No migration needed

## [1.0.0] - 2024-09-02

### Added
- Initial version
- Basic Quick Draft widget removal
- Simple function without prefixes

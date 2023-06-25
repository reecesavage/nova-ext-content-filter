# Content Filter - A [Nova](https://anodyne-productions.com/nova) Extension

<p align="center">
  <a href="https://github.com/reecesavage/nova-ext-content-filter/releases/tag/v1.1.0"><img src="https://img.shields.io/badge/Version-v1.1.0-brightgreen.svg"></a>
  <a href="http://www.anodyne-productions.com/nova"><img src="https://img.shields.io/badge/Nova-v2.7.5+-orange.svg"></a>
  <a href="https://www.php.net"><img src="https://img.shields.io/badge/PHP-v8.x-blue.svg"></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/license-MIT-red.svg"></a>
</p>

This extension blocks public viewing of Posts that contain Adult content. Requires a user to be logged in to view posts that contain Level 3 Violence, Sex, or Language. Removes the Post Body from the RSS Feed. Uses the RPG Rating system at https://rpgrating.com/

This extension requires:

- Nova 2.7.5+

## Upgrade Considerations
- If upgrading Nova 2.6+ with this Nove Extension already deployed:
- Remove `$config['extensions']['enabled'][] = 'nova_ext_content_filter';` from `application/config/extensions.php` prior to the Nova upgrade.
- After upgrading Nova to 2.7.5+, follow the installation steps below. The database tables still contain your data

## Installation

- Copy the entire directory into `applications/extensions/nova_ext_content-filter`.
- Add the following to `application/config/extensions.php`:
```
$config['extensions']['enabled'][] = 'nova_ext_content_filter';
```
### Setup Using Admin Panel

- Navigate to your Admin Control Panel
- Choose Content Filter under Manage Extensions
- Click Add Column to add the required column to the SQL Table.
- Click Update Controller to update the required Nova files.
- Set your Max Content Level and Default Content Level.
- Click Submit.

Installation is now complete!

## Usage

- When writing or editing a mission post, set the content level of the post before posting. The content level will save with post saves. New posts start with the default level set by the Game Manager.

## Issues

If you encounter a bug or have a feature request, please report it on GitHub in the issue tracker here: https://github.com/reecesavage/nova-ext-content-filter/issues

## License

Copyright (c) 2023 Reece Savage.

This module is open-source software licensed under the **MIT License**. The full text of the license may be found in the `LICENSE` file.

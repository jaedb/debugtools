Description
===========

Adds additional functionality to assist in debugging and developing SilverStripe websites.


Dependancies
============

* SilverStripe 3.1+

Installation
============

1. Add to your composer requirements `composer require jaedb/debugtools`
2. Edit your theme's `templates/Page.ss` template and add `$DebugTools` immediately before the `</body>` tag
3. Run /dev/build?flush=1
4. Toggle debug tools by turning your site to DEV or TEST modes (disabled on LIVE sites for obvious reasons)
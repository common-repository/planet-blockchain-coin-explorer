=== Planet Blockchain Coin Explorer ===
Contributors: jwbrew, hughjd
Requires at least: 2.7
Tested up to: 4.9.1
Stable tag: 3.2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enable the Planet Blockchain CoinExplorer shortcode

== Installation ==

* Upload the plugin folder to the `/wp-content/plugins` directory, or install the plugin through the WordPress plugins screen directly.
* Activate the plugin through the 'Plugins' screen in WordPress

== Usage ==

##### Syntax
`[pbce sym=... (render=...) (fixed=...)]`

##### Parameters
* `sym` _[string, required]_
&nbsp;&nbsp;&nbsp;&nbsp;ticker symbol of the coin to display, e.g. 'BTC'
* `render` _[string, optional (defaults to 'widget')]_
&nbsp;&nbsp;&nbsp;&nbsp;render mode, can be one of 'full', 'chart' or 'widget'
* `fixed` _[boolean, optional (defaults to false)]_
&nbsp;&nbsp;&nbsp;&nbsp;whether or not to show the 'Search' button in widget or full mode

##### Examples
* `[pbce sym='DOGE' fixed='true']`
* `[pbce sym='ETH' render='chart']`
* `[pbce sym='XMR' render='full' fixed='true']`

##### Limitations
* There can only be one usage of the shortcode per page. If more than one is on a page, only the first will render.

== Changelog ==

= 1.0 =
* First release

= 2.9 =
* Fix bug where charts would intermittently fail to render

= 3.0 =
* Add chart-only mode
* Rename widget-mode 'back' button to 'search'
* Conditionally show search button based on new 'fixed' flag in shortcode
* Update README with instructions on running and releasing

= 3.0.1 =

* Actually rename widget-mode 'back' button to 'search'
* Switch to [semantic versioning](https://semver.org/)

= 3.0.2 =

* Add usage instructions to both READMEs

= 3.1.2 =

* Remove AI Predictions button from chart

= 3.2.0 =

* Improve chart look and feel
* Remove toggle chart buttons

= 3.2.1 =

* Improve coin explorer full view
* Add semantic versioning link to main README

= 3.2.2 =

* Add NANO to coins.json

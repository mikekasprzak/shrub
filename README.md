# SHRUB
Shrub is a next generation CMS core written in PHP and JavaScript (ES2015). It's designed for running flexible large scale user driven communities, with minimal overhead.

Shrub is a backend, not a frontend. It has no user interface, just a series of restful APIs for fetching data, and caching it in the browser (client side).

### Server Requires:
* PHP 7.x (will work with PHP 5.6, for now)
* MariaDB 10.x (will work MySQL 5.6, for now)
* PHP Plugin: APCu (for best performance)
* (That PHP plugin for ACPu sessions... I forget the name)

Shrub is designed and optimized for the above.

### Building the Client code Requires:
* An ES2015 toolchain.
* It's being developed using Buble and RollupJS (best), but may work with Babel JS.


# SHRUB PLUGINS
* ShrubMill - Calender, schedules, and automation

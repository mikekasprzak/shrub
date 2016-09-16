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

Shrub is developed using Buble and RollupJS (for best performance), but may work with Babel JS.

# SHRUB DESIGN
Shrub provides the following:

* Posts/Pages/Custom nodes
* History of edits and changes
* Comments
* User Accounts
* Notifications
* Messaging

# SHRUB PLUGINS
Advanced features outside the scope of a CMS are optionally available as plugins.

* ShrubMill - Schedules and Automation

Plugins share a similar directory structure to Shrub. To install a plugin, simply copy the unique contents in to your Shrub folder. Server side will be handled automatically.

Client side however, you will need to make the following

[Insert Change Here]


# SHRUB HISTORY

Shrub was originally designed and created for Jammer and Ludum Dare game jam communities.

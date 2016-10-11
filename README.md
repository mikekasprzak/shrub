# SHRUB
Shrub is a next generation CMS core written in PHP and JavaScript (ES2015). It's designed for running flexible large scale user driven communities, with minimal overhead.

Shrub is a backend, not a frontend. It has no user interface, just a series of restful APIs for fetching data, and caching that data in the browser (client side).

### Server Requires
* PHP 7.x (will work with PHP 5.6, for now)
* PHP Plugin: APCu (for best performance)
* MariaDB 10.x (will work MySQL 5.6, for now anyway)

Shrub is designed and optimized for the above.

### Building the Client code Requires
* An ES2015 toolchain

Shrub is developed using Buble and RollupJS (for smallest size and best performance), but may work with Babel JS.

# SHRUB DESIGN
Shrub provides the following:

* User Accounts
* Flexibel node type (Pages, Posts, Users, etc)
* History of edits and changes to nodes
* Wiki/Source Control-like patching from other users
* Comments and Messaging
* Notifications and Subscriptions
* Scheduling and Automation


# SHRUB HISTORY

Shrub was originally designed and created for Jammer and Ludum Dare game jam communities.

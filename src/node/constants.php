<?php

if ( !defined('SH_TABLE_PREFIX') ) {
	define('SH_TABLE_PREFIX',"sh_");	
}

// Database Tables //
const SH_TABLE_NODE =					SH_TABLE_PREFIX."node";
const SH_TABLE_NODE_LINK =				SH_TABLE_PREFIX."node_link";
const SH_TABLE_NODE_META =				SH_TABLE_PREFIX."node_meta";
const SH_TABLE_NODE_DIFF =				SH_TABLE_PREFIX."node_diff";
const SH_TABLE_NODE_LOVE =				SH_TABLE_PREFIX."node_love";
const SH_TABLE_NODE_STAR =				SH_TABLE_PREFIX."node_star";

// Item Constants //
const SH_NODE_ROOT = 1;					// The root of our Node tree
const SH_NODE_USER = 2;					// Users
//const SH_NODE_ADMIN = 3;				// Administrator Control Panel
//const SH_NODE_TEAM = 4;				// Teams (uncategorized only, i.e. Admin)
//const SH_NODE_GAME = 5;				// Games (proxy)
//const SH_NODE_DEMO = 6;				// Demos (proxy)
//const SH_NODE_CRAFT = 7;				// Crafts (proxy)
//const SH_NODE_POST = 8;				// Posts (proxy)
//const SH_NODE_MEDIA = 9;				// Media (proxy)

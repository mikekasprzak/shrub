<?php

// Make sure SH_TABLE_PREFIX exists.
if ( !defined('SH_TABLE_PREFIX') ) {
	define('SH_TABLE_PREFIX',"sh_");	
}

// Database Tables //
const SH_TABLE_CONFIG =					SH_TABLE_PREFIX."config";

const SH_TABLE_NODE =					SH_TABLE_PREFIX."node";
const SH_TABLE_NODE_LINK =				SH_TABLE_PREFIX."node_link";
const SH_TABLE_NODE_META =				SH_TABLE_PREFIX."node_meta";
const SH_TABLE_NODE_DIFF =				SH_TABLE_PREFIX."node_diff";
const SH_TABLE_NODE_LOVE =				SH_TABLE_PREFIX."node_love";
const SH_TABLE_NODE_STAR =				SH_TABLE_PREFIX."node_star";

const SH_TABLE_USER =					SH_TABLE_PREFIX."user";
const SH_TABLE_USER_ACCESS =			SH_TABLE_PREFIX."user_access";
const SH_TABLE_USER_STRIKE =			SH_TABLE_PREFIX."user_strike";

const SH_TABLE_COMMENT =				SH_TABLE_PREFIX."comment";
const SH_TABLE_COMMENT_LOVE =			SH_TABLE_PREFIX."comment_love";


// Field constants for Schema //
const SH_FIELD_TYPE_IGNORE = 0;			// Field will be unset (NOTE: Prefer a custom query) //
const SH_FIELD_TYPE_STRING = 1;
const SH_FIELD_TYPE_INT = 2;
const SH_FIELD_TYPE_FLOAT = 3;
const SH_FIELD_TYPE_DATETIME = 4;
const SH_FIELD_TYPE_JSON = 5;


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

<?php

$namespaceNames = [];

if ( ! defined( 'NS_EXT_SANDBOX' ) ) {
	define( 'NS_EXT_SANDBOX', 1000000010 );
	define( 'NS_EXT_SANDBOX_TALK', 1000000011 );
}

if ( ! defined( 'NS_EXT_DRAFT' ) ) {
	define( 'NS_EXT_DRAFT', 1000000020 );
	define( 'NS_EXT_DRAFT_TALK', 1000000021 );
}

if ( ! defined( 'NS_EXT_BLOG' ) ) {
	define( 'NS_EXT_BLOG', 1000000030 );
	define( 'NS_EXT_BLOG_TALK', 1000000031 );
}

if ( ! defined( 'NS_EXT_NEWS' ) ) {
	define( 'NS_EXT_NEWS', 1000000040 );
	define( 'NS_EXT_NEWS_TALK', 1000000041 );
}

if ( ! defined( 'NS_EXT_EXTENSION' ) ) {
	define( 'NS_EXT_EXTENSION', 1000000050 );
	define( 'NS_EXT_EXTENSION_TALK', 1000000051 );
}

if ( ! defined( 'NS_EXT_THEME' ) ) {
	define( 'NS_EXT_THEME', 1000000060 );
	define( 'NS_EXT_THEME_TALK', 1000000061 );
}

if ( ! defined( 'NS_EXT_PORTAL' ) ) {
	define( 'NS_EXT_PORTAL', 1000000070 );
	define( 'NS_EXT_PORTAL_TALK', 1000000071 );
}

$namespaceNames['en'] = [
	NS_EXT_SANDBOX        => 'Sandbox',
	NS_EXT_SANDBOX_TALK   => 'Sandbox_talk',
	NS_EXT_DRAFT          => 'Draft',
	NS_EXT_DRAFT_TALK     => 'Draft_talk',
	NS_EXT_BLOG           => '',
	NS_EXT_BLOG_TALK      => '',
	NS_EXT_NEWS           => '',
	NS_EXT_NEWS_TALK      => '',
	NS_EXT_EXTENSION      => '',
	NS_EXT_EXTENSION_TALK => '',
	NS_EXT_THEME          => '',
	NS_EXT_THEME_TALK     => '',
	NS_EXT_PORTAL         => '',
	NS_EXT_PORTAL_TALK    => '',
];

$namespaceNames['ru'] = [
	NS_EXT_SANDBOX        => 'Песочница',
	NS_EXT_SANDBOX_TALK   => 'Обсуждение_песочницы',
	NS_EXT_DRAFT          => 'Черновик',
	NS_EXT_DRAFT_TALK     => 'Обсуждение_черновика',
	NS_EXT_BLOG           => '',
	NS_EXT_BLOG_TALK      => '',
	NS_EXT_NEWS           => '',
	NS_EXT_NEWS_TALK      => '',
	NS_EXT_EXTENSION      => '',
	NS_EXT_EXTENSION_TALK => '',
	NS_EXT_THEME          => '',
	NS_EXT_THEME_TALK     => '',
	NS_EXT_PORTAL         => '',
	NS_EXT_PORTAL_TALK    => '',
];
<?php
$namespaceNames = [];

if ( ! defined( 'NS_EXT_SANDBOX' ) ) {
	define( 'NS_EXT_SANDBOX', 100000 );
	define( 'NS_EXT_SANDBOX_TALK', 100001 );
}

if ( ! defined( 'NS_EXT_DRAFT' ) ) {
	define( 'NS_EXT_DRAFT', 100010 );
	define( 'NS_EXT_DRAFT_TALK', 100011 );
}

$namespaceNames['en'] = [
	NS_EXT_SANDBOX      => 'Sandbox',
	NS_EXT_SANDBOX_TALK => 'Sandbox_talk',
	NS_EXT_DRAFT        => 'Draft',
	NS_EXT_DRAFT_TALK   => 'Draft_talk',
];

$namespaceNames['ru'] = [
	NS_EXT_SANDBOX      => 'Песочница',
	NS_EXT_SANDBOX_TALK => 'Обсуждение_песочницы',
	NS_EXT_DRAFT        => 'Черновик',
	NS_EXT_DRAFT_TALK   => 'Обсуждение_черновика',
];
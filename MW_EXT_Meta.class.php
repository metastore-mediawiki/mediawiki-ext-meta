<?php

namespace MediaWiki\Extension\MW_EXT_Meta;

use OutputPage, Skin;
use MediaWiki\Extension\MW_EXT_Kernel\MW_EXT_Kernel;

/**
 * Class MW_EXT_Meta
 */
class MW_EXT_Meta {

	/**
	 * Load resource function.
	 *
	 * @param OutputPage $out
	 * @param Skin $skin
	 *
	 * @return bool
	 * @throws \ConfigException
	 */
	public static function onBeforePageDisplay( OutputPage $out, Skin $skin ) {
		$out->addStyle( 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i|Roboto:400,400i,700,700i|Fira+Mono:400,700&amp;subset=cyrillic', 'screen' );
		$out->addStyle( 'https://use.fontawesome.com/releases/v' . MW_EXT_Kernel::getConfig( 'EXT_Meta_FA_Version' ) . '/css/all.css', 'screen' );
		$out->addStyle( '/extensions/MW_EXT_Meta/modules/styles/theme.css', 'screen' );
		$out->addModules( [ 'ext.mw.meta' ] );

		return true;
	}
}

<?php

namespace MediaWiki\Extension\MW_EXT_Meta;

use OutputPage, Skin;
use MediaWiki\Extension\MW_EXT_Core\MW_EXT_Core;

/**
 * Class MW_EXT_Meta
 * ------------------------------------------------------------------------------------------------------------------ */
class MW_EXT_Meta {

	/**
	 * Load resource function.
	 *
	 * @param OutputPage $out
	 * @param Skin $skin
	 *
	 * @return bool
	 * @throws \ConfigException
	 * -------------------------------------------------------------------------------------------------------------- */

	public static function onBeforePageDisplay( OutputPage $out, Skin $skin ) {
		$out->addStyle( 'https://fonts.googleapis.com/css?family=Fira+Mono:400,700|Roboto+Condensed:400,400i,700,700i|Roboto:400,400i,700,700i&amp;subset=cyrillic', 'screen' );
		$out->addStyle( 'https://use.fontawesome.com/releases/v' . MW_EXT_Core::getConfig( 'EXT_Meta_FA_Version' ) . '/css/all.css', 'screen' );
		$out->addStyle( '/extensions/MW_EXT_Meta/modules/styles/theme.css', 'screen' );
		$out->addModules( [ 'ext.mw.meta' ] );

		return true;
	}
}

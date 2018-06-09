<?php

/**
 * Class MW_EXT_Meta
 * ------------------------------------------------------------------------------------------------------------------ */

class MW_EXT_Meta {

	/**
	 * Get MediaWiki message.
	 *
	 * @param $string
	 *
	 * @return string
	 */
	private static function getMsgText( $string ) {
		$outString = wfMessage( 'mw-ext-license-' . $string )->inContentLanguage()->text();

		return $outString;
	}

	/**
	 * Get configuration parameters.
	 *
	 * @param $param
	 *
	 * @return mixed
	 * @throws ConfigException
	 * -------------------------------------------------------------------------------------------------------------- */

	private static function getConfig( $param ) {
		$context   = new RequestContext();
		$getConfig = $context->getConfig()->get( $param );

		return $getConfig;
	}

	/**
	 * Load resource function.
	 *
	 * @param OutputPage $out
	 * @param Skin $skin
	 *
	 * @return bool
	 * @throws ConfigException
	 * -------------------------------------------------------------------------------------------------------------- */

	public static function onBeforePageDisplay( OutputPage $out, Skin $skin ) {
		$out->addStyle( 'https://fonts.googleapis.com/css?family=Fira+Mono:400,700|Roboto+Condensed:400,400i,700,700i|Roboto:400,400i,700,700i&amp;subset=cyrillic', 'screen' );
		$out->addStyle( 'https://use.fontawesome.com/releases/v' . self::getConfig( 'EXT_Meta_FA_Version' ) . '/css/all.css', 'screen' );
		$out->addStyle( '/extensions/MW_EXT_Meta/modules/styles/theme.css', 'screen' );
		$out->addModules( array( 'ext.mw.meta' ) );

		return true;
	}
}

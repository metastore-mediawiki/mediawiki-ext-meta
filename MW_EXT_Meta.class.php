<?php

namespace MediaWiki\Extension\METADATA;

use OutputPage, Skin;

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
	 */
	public static function onBeforePageDisplay( OutputPage $out, Skin $skin ) {
		return true;
	}
}

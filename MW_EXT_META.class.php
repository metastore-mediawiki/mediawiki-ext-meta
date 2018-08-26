<?php

namespace MediaWiki\Extension\MetaStore;

use OutputPage, Skin;

/**
 * Class MW_EXT_META
 */
class MW_EXT_META {

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

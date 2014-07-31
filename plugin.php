<?php
/**
 * Class PulonairGoogleAuthorship
 *
 * @author Nikolas Hagelstein <nikolas.hagelstein@gmail.com>
 */
class PulonairGoogleAuthorship extends KokenPlugin {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->register_filter('site.output', 'addRelParameterToGoogleProfileUrl');
	}

	/**
	 * Adds '?rel=author' to the google profile Url
	 *
	 * @param $content
	 * @return mixed
	 */
	public function addRelParameterToGoogleProfileUrl($content) {
		if ($googleProfileUrl = Koken::$profile['google_plus']) {
			$content = str_replace(
				'href="' . $googleProfileUrl . '"',
				'href="' . $googleProfileUrl . '?rel=author"',
			$content);
		}

		return $content;
	}

}
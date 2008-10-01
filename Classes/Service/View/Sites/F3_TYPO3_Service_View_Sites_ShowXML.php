<?php
declare(ENCODING = 'utf-8');
namespace F3::TYPO3::Service::View::Sites;

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * @package TYPO3
 * @subpackage Service
 * @version $Id:F3::TYPO3::View::Page.php 262 2007-07-13 10:51:44Z robert $
 */

/**
 * XML view for the Site Show action
 *
 * @package TYPO3
 * @subpackage Service
 * @version $Id:F3::TYPO3::View::Page.php 262 2007-07-13 10:51:44Z robert $
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class ShowXML extends F3::FLOW3::MVC::View::AbstractView {

	/**
	 * @var F3::TYPO3::Domain::Model::Site
	 */
	public $site;

	/**
	 * Renders this show view
	 *
	 * @return string The rendered XML output
	 * @author Robert Lemke <robert@typo3.org>
	 */
	public function render() {

		$dom = new DOMDocument ('1.0', 'utf-8');
		$dom->formatOutput = TRUE;

		$domSite = $dom->appendChild(new DOMElement('site'));
		$domSite->appendChild(new DOMAttr('id', $this->site->getId()));
		$domSite->appendChild(new DOMElement('name', $this->site->getName()));

		return $dom->saveXML();
	}
}
?>
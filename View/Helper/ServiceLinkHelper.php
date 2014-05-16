<?php
/**
 * @copyright   2014, Chris Vogt - http://chrisvogt.me
 * @license     https://github.com/chrisvogt/ServiceLink/blob/master/license.md
 * @link        https://github.com/chrisvogt/ServiceLink
 */

/**
 * Class ServiceLinkHelper
 *
 * Actions to help build links to services or profiles.
 *
 * @since         ServiceLink 0.9.0
 */
class ServiceLinkHelper extends AppHelper {

	public function profile($search_service, $username) {
		$service = $this->_getServiceLink($search_service);
		return $this->_buildUrl($service, $username);
	}

	public function href($service) {
		$link = $this->_getServiceLink($search_service);
		return $this->_buildUrl($link);
	}

	protected function _getServiceLink($search_service) {
		$model = ClassRegistry::init('ServiceLink.Service');
		$service = $model->findByName($search_service, array('fields' => 'href'));
		if(!$service) {
			$msg = 'The service,' . $search_service . ', was not found.';
			throw new NotFoundException($msg);
		}
		return $service;
	}

	protected function _buildUrl($service, $username = null) {
		if (!$username) {
			return $service;
		}
		$link = str_replace('{USERNAME}', $username, $service['Service']['href']);
		return $link;
	}

}
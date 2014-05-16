<?php
/**
 * @copyright   2014, Chris Vogt - http://chrisvogt.me
 * @license     https://github.com/chrisvogt/ServiceLink/blob/master/license.md
 * @link        https://github.com/chrisvogt/ServiceLink
 */

App::uses('AppModel', 'Model');

/**
 * A Model that connects to the services source
 *
 * @since         ServiceLink 0.9.0
 */
class Service extends ServiceLinkAppModel {
	
	/**
	 * Define database.php configuration to use
	 *
	 * @type string
	 */
	var $useDbConfig = 'services';

	/**
	 * Schema to validate against (mongoDB)
	 *
	 * @type array
	 */
	var $mongoSchema = array(
		'name' => array('type'=>'string'),
		'href'=>array('type'=>'string')
	);

}
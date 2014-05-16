<?php
/**
 * @copyright   2014, Chris Vogt - http://chrisvogt.me
 * @license     https://github.com/chrisvogt/ServiceLink/blob/master/license.md
 * @link        https://github.com/chrisvogt/ServiceLink
 */

class ServiceLinkSchema extends CakeSchema {

    // for MySQL
    /*
    public $services = array(
        'id' => array(
            'type' => 'integer',
            'null' => false,
            'default' => null,
            'length' => 10,
            'key' => 'primary'
        ),
        'name' => array(
            'type' => 'string',
            'null' => false,
            'default' => null,
            'length' => 255
        ),
        'href' => array(
            'type' => 'text',
            'null' => false,
            'default' => null,
            'length' => null
        )
        'indexes' => array(
            'PRIMARY' => array( 'column' => 'id', 'unique' => 1 )
        )
    );
    */

    // for mongoDB
    public $services = array(
        'name' => array('type'=>'string'),
        'href'=>array('type'=>'string')
    );
}
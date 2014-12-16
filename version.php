<?php

/**
 * 
 *
 * @package    mod
 * @subpackage mylabmastering
 * @copyright
 * @author 
 * @license
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2014082600;
$plugin->requires  = 2013110500;
$module->cron      = 0;
$module->component = 'mod_mylabmastering';
$module->maturity  = MATURITY_STABLE;
$module->release   = '1.0';

$module->dependencies = array(
		'mod_lti' => ANY_VERSION
);

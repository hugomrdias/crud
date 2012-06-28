<?php
/**
 * Part of the Crud bundle for Laravel.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    1.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2012, Cartalyst LLC
 * @link       http://cartalyst.com
 */

// Autoload classes
Autoloader::map(array(
    'Crud\\Crud' => __DIR__.DS.'crud.php',
));

// Set the global alias for Crud
Autoloader::alias('Crud\\Crud', 'Crud');

// Load Crud helper functions
require_once __DIR__.DS.'helpers.php';
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

if ( ! function_exists('get_object_public_vars'))
{
	/**
	 * Gets all the public vars for an object.
	 * Use this if you need to get all the
	 * public vars of $this inside an object.
	 *
	 * @param   object  $obj
	 * @return	array
	 */
	function get_object_public_vars($obj)
	{
		return get_object_vars($obj);
	}
}

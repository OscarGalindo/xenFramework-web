<?php
/**
 * xenFramework (http://xenframework.com/)
 *
 * This file is part of the xenframework package.
 *
 * (c) Ismael Trascastro <itrascastro@xenframework.com>
 *
 * @link        http://github.com/xenframework for the canonical source repository
 * @copyright   Copyright (c) xenFramework. (http://xenframework.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Param name is the string between the brackets
 *
 * A route must start with a slash
 *
 * Only the controller and the action are mandatory
 *
 * Constraints are optional. You can use RegEx
 *
 * if expires is set, then it will be cached [0 | empty ==> not cached]
 */
return array(
    'com_calculator_controllers_index_index' => array(
        'path'              => '/calculator/index',
        'controller'        => 'index',
        'action'            => 'index',
    ),
    'com_calculator_controllers_index_doSum' => array(
        'path'              => '/calculator/add',
        'controller'        => 'index',
        'action'            => 'add',
    ),
);

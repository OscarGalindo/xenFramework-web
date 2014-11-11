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

namespace com\daw\calculator;

use bootstrap\AppBootstrap;
use xen\mvc\view\Phtml;

class Bootstrap extends AppBootstrap
{
    public function _initLayoutCalculadora()
    {
        $layout = $this->_container->getResource('View');
        $partial = new Phtml('application/packages/com/daw/calculator/views/partials/main_calc.phtml');
        $layout->addPartial('main_calc', $partial);

        return $layout;
    }
}

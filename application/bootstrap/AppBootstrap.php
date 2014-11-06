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

namespace bootstrap;

use xen\kernel\bootstrap\BootstrapBase;

class AppBootstrap extends BootstrapBase
{
    protected function _initLayout()
    {
        $layout = $this->_container->getResource('Layout');
        $request = $this->_container->getResource('Request');
        $layout->url_segments = explode('/', $request->getUrl());
        $layout->url = $request->getUrl();
        return $layout;
    }
}

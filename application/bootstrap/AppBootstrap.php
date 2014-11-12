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
use xen\mvc\view\Phtml;

class AppBootstrap extends BootstrapBase
{
    protected function _initMainLayout()
    {
        $layout = $this->getContainer()->getResource('Layout');
        $request = $this->getContainer()->getResource('Request');

        $partials   = array(
            'header' => new Phtml($this->getContainer()->getResource('LayoutPath') . DIRECTORY_SEPARATOR . 'header.phtml'),
            'footer' => new Phtml($this->getContainer()->getResource('LayoutPath') . DIRECTORY_SEPARATOR . 'footer.phtml'),
            'main_calc' => new Phtml('application/packages/com/daw/calculator/views/partials/main_calc.phtml'),
        );

        $layout->addPartials($partials);
        $layout->url_segments = explode('/', $request->getUrl());
        $layout->url = $request->getUrl();
        return $layout;
    }
}

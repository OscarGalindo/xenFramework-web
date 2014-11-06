<?php
/**
 * Created by PhpStorm.
 * User: kaseOga
 * Date: 4/11/14
 * Time: 15:28
 */

namespace com\daw\calculator\controllers;

use xen\mvc\Controller;
use xen\http\Request;

class IndexController extends Controller
{
    public function indexAction()
    {
        $this->render();
    }

    public function addAction()
    {
        $this->render();
    }
}
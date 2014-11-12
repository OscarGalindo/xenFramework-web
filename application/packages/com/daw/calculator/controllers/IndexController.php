<?php
/**
 * Created by PhpStorm.
 * User: kaseOga
 * Date: 4/11/14
 * Time: 15:28
 */

namespace com\daw\calculator\controllers;

use xen\mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $this->_layout->title = 'Index calculator';
        $this->render();
    }

    public function addAction()
    {
        $this->_layout->title = 'Add';
        $this->render();
    }

    public function subtractAction()
    {
        $this->_layout->title = 'Subtract';
        $this->render();
    }

    public function multiplicationAction()
    {
        $this->_layout->title = 'Multiplication';
        $this->render();
    }

    public function divisionAction()
    {
        $this->_layout->title = 'Division';
        $this->render();
    }
}
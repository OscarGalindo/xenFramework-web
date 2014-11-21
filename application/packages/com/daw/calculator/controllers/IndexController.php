<?php
/**
 * Created by PhpStorm.
 * User: kaseOga
 * Date: 4/11/14
 * Time: 15:28
 */

namespace com\daw\calculator\controllers;

use xen\mvc\Controller;
use xen\mvc\view\Phtml;

class IndexController extends Controller
{
    private $_model;
    public function setModel($model)
    {
        $this->_model = $model;
    }

    public function init()
    {
        $accion = $this->getRequest()->getAction();
        $partial = new Phtml('application/packages/com/daw/calculator/views/partial/main_calc.phtml');
        $partial->title = $this->_layout->title = ucfirst($accion);
        $partial->button = 'Do ' . $accion;
        $partial->action = $accion;
        $this->_view->addPartial($accion, $partial);
    }

    public function indexAction()
    {
        $this->_layout->title = 'Index calculadora';
        $this->render();
    }

    public function addAction()
    {
        $this->render();
    }

    public function subtractAction()
    {
        $this->render();
    }

    public function multiplicationAction()
    {
        $this->render();
    }

    public function divisionAction()
    {
        $this->render();
    }
}
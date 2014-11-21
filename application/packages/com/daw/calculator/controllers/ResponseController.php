<?php
/**
 * Created by PhpStorm.
 * User: kaseOga
 * Date: 21/11/14
 * Time: 15:37
 */

namespace com\daw\calculator\controllers;

use xen\http\Response;
use xen\mvc\Controller;

class ResponseController extends Controller
{
    private $_model;

    public function setModel($model)
    {
        $this->_model = $model;
    }

    public function init()
    {
        $params = json_decode(file_get_contents('php://input'));
        if($params) {
            $this->_model->setOp1($params->op1);
            $this->_model->setOp2($params->op2);
        }
    }

    public function doAction()
    {
        $resp = new Response();
        $resp->setHeaders('Content-Type: application/json');
        $action = $this->getParam('action');
        $this->_model->$action();
        $resultado = $this->_model->getResult();
        $resp->setContent(json_encode(array('result' => $resultado)));
        $resp->send();
    }
} 
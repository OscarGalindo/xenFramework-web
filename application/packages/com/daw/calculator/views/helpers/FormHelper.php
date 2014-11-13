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

namespace com\daw\calculator\views\helpers;

use xen\mvc\helpers\ViewHelper;

class FormHelper extends ViewHelper
{
    /*
     * $params['action']
     * $params['id']
     * $params['method']
     * $params['buttonValue']
     * $params['controls'] = array(array ('field'  => String
     *                                    'type'   => [number, email, date, hidden, ...]
     * ))
     */
    protected function _html()
    {
        $this->_html = '
            <form
                class="form-horizontal"
                role="form"
                action="'   . $this->_params['action'] . '"
                id="'       . $this->_params['id'] . '"
                method="'   . $this->_params['method'] . '">';
        foreach ($this->_params['controls'] as $control) {
            $this->_html .= '<div class="form-group">
                                <label for="input_' . $control['field'] . '"
                                class="col-sm-2 control-label">' . $control['field'] . '</label>
                                <div class="col-sm-10">
                                  <input
                                    type="' . $control['type'] . '" name="' . $control['field'] . '" class="form-control"
                                    id="input' . $control['field'] . '" placeholder="' . $control['field'] . '">
                                </div>
                              </div>';
        }
        $this->_html .= '
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default btn-sm">' . $this->_params['buttonValue'] . '</button>
                </div>
            </div>
        </form>
        ';
    }
}
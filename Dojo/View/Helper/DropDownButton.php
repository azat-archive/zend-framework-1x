<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Dojo
 * @subpackage View
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: DropDownButton.php 60 2010-04-22 22:26:08Z georgy.turevich $
 */

/** Zend_Dojo_View_Helper_DijitContainer */
require_once 'Zend/Dojo/View/Helper/Button.php';

/**
 * Dojo DropDownButton dijit
 *
 * @uses       Zend_Dojo_View_Helper_DijitContainer
 * @package    Zend_Dojo
 * @subpackage View
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Dojo_View_Helper_DropDownButton extends Zend_Dojo_View_Helper_Button
{
    /**
     * Dijit being used
     * @var string
     */
    protected $_dijit  = 'dijit.form.DropDownButton';

    /**
     * Dojo module to use
     * @var string
     */
    protected $_module = 'dijit.form.DropDownButton';

    /**
     * dijit.form.DropDownButton
     *
     * @param  string $id
     * @param  string $content
     * @param  array $params  Parameters to use for dijit creation
     * @param  array $attribs HTML attributes
     * @return string
     */
    public function dropDownButton($id, $value = null, array $params = array(), array $attribs = array())
    {
        return $this->button($id, $value, $params, $attribs);
    }
}

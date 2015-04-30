<?php
/**
 * Index Controller
 *
 */
class Linus_ProphetTest_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * Index Action
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}

<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace website\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ServicesController extends AbstractActionController
{
   
    public function indexAction()
    {
        $column=(string)$this->params()->fromRoute('column');
        $column=  explode(',', $column);
        return new ViewModel(
                    array(
                        'column'=>$column,
                    )
                );
    }
    
    public function addAction()
    {
        return new ViewModel();
    }
    
    public function deleteAction()
    {
        return new ViewModel();
    }
    
    public function editAction()
    {
        return new ViewModel();
    }
}

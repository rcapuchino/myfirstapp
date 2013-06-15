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

class AboutController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(
            array(
                "nombre" =>"Roberto",
                "services" => array('hosting','dominios','ssl','servidores dedicados','reseller','cPanel licencia','windows licencia'),
                "hosting" => array(
                                'shared' => array(
                                    'space'=>'100GB',
                                    'bw'=>'100GB',
                                    'so'=>'linux',
                                    'panel'=>'cpanel'
                                ),
                                'reseller' =>array(
                                    'space'=>'700GB',
                                    'bw'=>'500GB',
                                    'so'=>'windows',
                                    'panel'=>'plesk'
                                ),
                                'dedicado' =>array(
                                    'space'=>'2x500GB',
                                    'bw'=>'5Mbit',
                                    'so'=>'windows 2008',
                                    'panel'=>'SinPanel'
                                ),
                            )
             )    
            );
    }
}

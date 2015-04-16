<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.04.2015
 * Time: 20:29
 */

namespace Acme\ShopBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShopController extends Controller{
    public function indexAction($name)
    {
        return $this->render('AcmeShopBundle:Shop:index.html.twig', array('name' => $name));
    }
}
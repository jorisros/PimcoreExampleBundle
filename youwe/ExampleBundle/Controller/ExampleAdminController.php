<?php

namespace youwe\ExampleBundle\Controller;

use Pimcore\Bundle\AdminBundle\Controller\AdminController;
use Pimcore\Controller\FrontendController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ExampleAdminController
 * @package youwe\ExampleBundle\Controller
 *
 * @Route("/admin")
 */
class ExampleAdminController extends AdminController
{
    /**
     * @Route("/example")
     */
    public function indexAction(Request $request)
    {
        return new Response('Hello world from youwe_example');
    }
}

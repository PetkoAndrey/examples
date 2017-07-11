<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class FlexboxController
 * @package AppBundle\Controller
 *
 * @Route("/flex")
 */
class FlexboxController extends Controller
{
    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Flexbox:index.html.twig');
    }

    /**
     * @Route("/episod-2", name="episod2")
     */
    public function episod2Action()
    {
        return $this->render('AppBundle:Flexbox:episod2.html.twig');
    }


    /**
     * @Route("/episod-3", name="episod3")
     */
    public function episod3Action()
    {
        return $this->render('AppBundle:Flexbox:episod3.html.twig');
    }
}

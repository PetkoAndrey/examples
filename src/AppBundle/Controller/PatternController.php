<?php

namespace AppBundle\Controller;

use AppBundle\Patterns\Decorator\BasicInspection;
use AppBundle\Patterns\Decorator\OilChange;
use AppBundle\Patterns\Decorator\TireRotation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class PatternController
 * @package AppBundle\Controller
 *
 * @Route("/pattern")
 */
class PatternController extends Controller
{
    /**
     * @Route("/decorator", name="decorator")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function decoratorAction()
    {
        $service = new OilChange(new TireRotation(new BasicInspection()));

        return $this->render('AppBundle:Pattern:decorator.html.twig', compact('service'));
    }
}
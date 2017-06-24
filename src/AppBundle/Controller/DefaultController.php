<?php

namespace AppBundle\Controller;

use AppBundle\Closures\ClosureProduct;
use AppBundle\Closures\Totalizer;
use AppBundle\LateStaticBinding\OtherUser;
use AppBundle\LateStaticBinding\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/late-static-binding", name="late-static-binding")
     */
    public function lateStaticBindingAction()
    {
        $user = User::create();
        $otherUser = OtherUser::create();

        dump($user);
        dump($otherUser);
        die;
    }

    /**
     * @Route("/trait", name="trait")
     */
    public function traitAction()
    {
        $utilityService = $this->get('learning.utility.service');
        $price = 20;

        $tax = $utilityService->getFinalPrice($price);
        $calculate = $utilityService->calculate($price);


        dump($calculate);
        dump($tax);
        die;
    }


    /**
     * @Route("/delegation", name="delegation")
     */
    public function delegationAction()
    {
        $person = $this->get('learning.delegation.person');

        $person->writeName();
        $person->writeAge();
        die;
    }

    /**
     * @Route("/closures", name="closures")
     */
    public function closuresAction()
    {
        $processSale = $this->get('learning.closures.process_sale');

        $processSale->registerCallback(Totalizer::warnAmount(8));

        $processSale->sale(new ClosureProduct("Туфли", 6));
        $processSale->sale(new ClosureProduct("Кофе", 6));

        die;
    }
}

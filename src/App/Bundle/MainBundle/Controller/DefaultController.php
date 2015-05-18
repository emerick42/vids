<?php

namespace App\Bundle\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * The homepage of the site, listing top videos
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $videos = $this->getTopReader()->page(1);

        return $this->render('AppMainBundle:Default:index.html.twig', [
            'videos' => $videos,
        ]);
    }

    /**
     * Get the video top list reader service
     *
     * @return \App\Domain\Top\ReaderInterface
     */
    public function getTopReader()
    {
        return $this->get('app_main.top.reader');
    }
}

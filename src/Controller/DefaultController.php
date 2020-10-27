<?php

namespace App\Controller;

use App\Provider\VfxProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="HOMEPAGE")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/vfx", name="VFX")
     */
    public function vfx(VfxProvider $vfxProvider): Response
    {
        return $this->render('default/vfx.html.twig', [
            'videos' => dump($vfxProvider->getVfxVideos()),
        ]);
    }
    
    /**
     * @Route("/animation", name="ANIMATION")
     */
    public function animation(): Response
    {
        return $this->render('default/animation.html.twig');
    }
    
    /**
     * @Route("/modeling", name="MODELING")
     */
    public function modeling(): Response
    {
        return $this->render('default/modeling.html.twig');
    }
    
    /**
     * @Route("/contact", name="CONTACT")
     */
    public function contact(): Response
    {
        return $this->render('default/contact.html.twig');
    }
}

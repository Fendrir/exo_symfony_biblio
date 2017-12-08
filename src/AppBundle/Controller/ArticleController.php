<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

    /**
     * @Route("/pageArticle")
     */
class ArticleController extends Controller
{
    /**
     * @Route("/new")
     */
    public function newAction()
    {
        return $this->render('AppBundle:Article:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('AppBundle:Article:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Article:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/view")
     */
    public function viewAction()
    {
        return $this->render('AppBundle:Article:view.html.twig', array(
            // ...
        ));
    }

}

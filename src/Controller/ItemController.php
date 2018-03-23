<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ItemController extends Controller
{
    /**
     * @Route("/item", name="item")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        //$conUser= new User();
        $arItem = $em->getRepository('App:Item')->findAll();

        return $this->render('item/listadoItem.html.twig', [
            "items"=>$arItem
        ]);
    }
}

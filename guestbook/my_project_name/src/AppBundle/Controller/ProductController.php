<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProductController
 * @package AppBundle\Controller
 */
class ProductController extends Controller
{
    /**
     * @Route("/products", name="products_list")
     */
    public function indexAction()
    {
        $products = $this->getDoctrine()->getRepository('AppBundle:Product')->findAll();
        $products = [];
        for ($i=1;$i<10;$i++){
            $products[] = "" . $i;
        }
        // replace this example code with whatever you need
        return $this->render('@App/product/products.html.twig', ['products'=>$products]);
    }

    /**
     * @Route("/product/{id}", name="product_show", requirements={"id": "[0-9]+"})
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function showAction($id)
    {
        // replace this example code with whatever you need
        return $this->render('@App/product/product.html.twig', ['product_id'=>$id]);
    }
}

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
        $products = $this->getDoctrine()->getRepository('AppBundle:Product')->findActive();

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
        $product = $this->getDoctrine()->getRepository('AppBundle:Product')->find($id);
        if(!$product){
            throw $this->createNotFoundException('Not Found');
        }
        // replace this example code with whatever you need
        return $this->render('@App/product/product.html.twig', ['product'=>$product]);
    }
}

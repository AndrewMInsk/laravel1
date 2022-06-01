<?php

    namespace AppBundle\Controller;
    use AppBundle\AppBundle;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Routing\Annotation\Route;

    class CategoryController extends Controller
    {
        /**
         * @Route("/categories", name="categories")
         */
        public function indexAction()
        {
            $categories = $this->getDoctrine()->getRepository('AppBundle:Category')->findAll();

            // replace this example code with whatever you need
            return $this->render('@App/product/categories.html.twig', ['categories' => $categories]);
        }
        /**
         * @Route("/category/{id}", name="category_show", requirements={"id": "[0-9]+"})
         */
        public function showAction($id)
        {
            $category = $this->getDoctrine()->getRepository('AppBundle:Category')->find($id);
            $products = $this->getDoctrine()->getRepository('AppBundle:Product')->findProducts($category);
            // replace this example code with whatever you need
            return $this->render('@App/product/category.html.twig', ['category' => $category, 'products'=>$products]);
        }
    }
<?php
    namespace App\Controller;


    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class HomeController extends AbstractController
    {
        /**
         * @Route("/", name="homepage")
         */
        public function number()
        {
            $number = random_int(0, 44);
         //   dump($number);
//            return new Response(
//                '<html><body>Lucky number: '.$number.'</body></html>'
//            );
            return $this->render('body/number.html.twig', ['number' => $number]);
        }
        public function feedbackAction(){
            return $this->render('body/feedback.html.twig');

        }
    }
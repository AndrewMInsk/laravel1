<?php
    namespace App\Controller;


    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class HomeController
    {
        /**
         * @Route("/", name="homepage")
         */
        public function number()
        {
            $number = random_int(0, 44);

            return new Response(
                '<html><body>Lucky number: '.$number.'</body></html>'
            );
        }
    }
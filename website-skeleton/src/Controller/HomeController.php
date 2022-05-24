<?
    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class HomeController extends AbstractController
    {
        /**
         * @Route("/", name="app_lucky_number")
         * return Request
         */
        public function index(Request $request): Response
        {
//            dump($request);
//            die();
            return $this->render('app/home.html.twig', ['number' => 1]);

        }
    }
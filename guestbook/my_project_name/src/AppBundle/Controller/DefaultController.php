<?php

    namespace AppBundle\Controller;

    use AppBundle\Form\FeedbackType;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;

    class DefaultController extends Controller
    {
        /**
         * @Route("/", name="homepage")
         */
        public function indexAction()
        {
            // replace this example code with whatever you need

            return $this->render('@App/home.html.twig');
        }

        /**
         * @Route("/feedback", name="feedback")
         */
        public function feedbackAction()
        {
            $form = $this->createForm(FeedbackType::class);
            // replace this example code with whatever you need
            return $this->render('@App/feedback.html.twig',['feedback_form'=>$form->createView()]);
        }
    }

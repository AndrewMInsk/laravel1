<?php

    namespace AppBundle\Controller;

    use AppBundle\Form\FeedbackType;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
         * @param Request $request
         * @return \Symfony\Component\HttpFoundation\Response|null
         */
        public function feedbackAction(Request $request)
        {
            $form = $this->createForm(FeedbackType::class);
            $form->add('submit', SubmitType::class);
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $feedback=$form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($feedback);
                $em->flush();
                $this->addFlash('success1', 'saved');
                return $this->redirectToRoute('feedback');
            }
            // replace this example code with whatever you need
            return $this->render('@App/feedback.html.twig',['feedback_form'=>$form->createView()]);
        }
    }

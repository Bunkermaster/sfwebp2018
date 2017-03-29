<?php

namespace HeticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class StudentController extends Controller
{
    /**
     * @Route("/student")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $repo = $this->getDoctrine()
            ->getRepository('HeticBundle:Student');
        $bullshit = $repo->findAllStudentByDate();
        dump($bullshit);
        die();
        return $this->render('HeticBundle:Student:index.html.twig', [
            'request' => $request
        ]);
    }

}

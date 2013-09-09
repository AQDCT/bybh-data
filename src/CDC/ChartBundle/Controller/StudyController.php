<?php

namespace CDC\ChartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use CDC\CDCChartBundle\Entity\School;


class StudyController extends Controller
{
    /**
     * Display all studies in the system.
     *
     * @Route("/studies", name="allstudies")
     * @Method("GET")
     * @Template()
     */
    public function getAllStudiesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $studies = $em->getRepository('CDCChartBundle:Study')->findBy(array(), array('name' => 'ASC'));
       
        if (!$studies) {
            throw $this->createNotFoundException('Unable to find Study entity.');
        }
   
        return $this->render('CDCChartBundle:Study:allstudies.html.twig', array('studies' => $studies));
    }

    /**
     * Display one study
     *
     * @Route("/study/{id}", name="singlestudy")
     * @Method("GET")
     * @Template()
     */
    public function getSingleStudyAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $thisStudy = $em->getRepository('CDCChartBundle:Study')->findOneById($id);
       
        if (!$thisStudy) {
            throw $this->createNotFoundException('Unable to find Study entity.');
        }
   
        return $this->render('CDCChartBundle:Study:study.html.twig', array('study' => $thisStudy));
    }

}

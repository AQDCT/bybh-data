<?php

namespace CDC\ChartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use CDC\CDCChartBundle\Entity\Study;


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
     * @Route("/study/{name}", name="singlestudy")
     * @Method("GET")
     * @Template()
     */
    public function getSingleStudyAction($name)
    {
        $em = $this->getDoctrine()->getManager();
        $study = $em->getRepository('CDCChartBundle:Study')->findOneByName($name);
        $thisStudy = $study->getId();

        // GET QUESTIONS
        $qb = $em->createQueryBuilder();
        $qb->select(array('q', 'c'));
        $qb->from('CDCChartBundle:Question','q')
            ->leftJoin('q.category', 'c', 'WITH', 'q.category = c.id')
            ->where("c.study = :study")
            ->setParameter('study', $thisStudy);
        
        $questions = $qb->getQuery()->getResult();

        // Default geographies for initial display
        $selections = '/USA/Chicago';
       
        if (!$study) {
            throw $this->createNotFoundException('Unable to find Study entity.');
        }
   
        return $this->render('CDCChartBundle:Study:study.html.twig', array('study' => $study, 'questions' => $questions, 'selections' => $selections));
    }

}

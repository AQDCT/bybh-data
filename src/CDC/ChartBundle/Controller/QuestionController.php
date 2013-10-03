<?php

namespace CDC\ChartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use CDC\CDCChartBundle\Entity\Question;

class QuestionController extends Controller
{

    /**
     * Display one question
     *
     * @Route("/question/{id}/{g1}/{g2}/{g3}/{g4}", name="singlequestion")
     * @Method("GET")
     * @Template()
     */
    public function getSingleQuestionAction($id, $g1='USA', $g2=NULL, $g3=NULL, $g4=NULL)
    {
        $em = $this->getDoctrine()->getManager();
        $thisQuestion = $em->getRepository('CDCChartBundle:Question')->findOneById($id);

        $thisStudy = $thisQuestion->getCategory()->getStudy()->getId();

        // GET QUESTIONS
        $qb = $em->createQueryBuilder();
        $qb->select(array('q', 'c'));
        $qb->from('CDCChartBundle:Question','q')
            ->leftJoin('q.category', 'c', 'WITH', 'q.category = c.id')
            ->where("c.study = :study")
            ->setParameter('study', $thisStudy);
        
        $questions = $qb->getQuery()->getResult();

        $max = 0;
        $min = 100;

        // Determine number of geographies expected in presentation 
        $geos = 4;

        // Add two (2) minimum for display
        $checkboxes = array();
        array_push($checkboxes, $g1);
        $selections = "/".$g1;

        $g4data = '';
        $g4row = '';   
        $g3data = '';
        $g3row = '';
        $g2data = '';
        $g2row = '';

        if(is_null($g2)){
              $geos = 1;
        }
        elseif(is_null($g3)){
              $geos = 2;
              $selections .= "/".$g2;
              array_push($checkboxes, $g2);
        }
        elseif(is_null($g4)){
              $geos = 3;
              $selections .= "/".$g2."/".$g3;
              array_push($checkboxes, $g2);
              array_push($checkboxes, $g3);
        }
        else{
              $geos = 4;
              $selections .= "/".$g2."/".$g3."/".$g4;
              array_push($checkboxes, $g2);
              array_push($checkboxes, $g3);
              array_push($checkboxes, $g4);
        }

        // Build datasets
        $dataset = 'datasets : [';


        while ($geos >= 1) {

            if(${'g'.$geos}=='Chicago'){
              $fillColor = "rgba(145, 217, 248, .8)";
              $color = "B3DDF2";
              $strokeColor = "rgba(145, 217, 248, 1)";
            }
            elseif(${'g'.$geos}=='USA'){
              $fillColor = "rgba(255, 232, 170, .5)";
              $color = "ffe8aa";
              $strokeColor = "rgba(255, 232, 170, 1)";
            }
            elseif(${'g'.$geos}=='Illinois'){
              $fillColor = "rgba(184, 217, 174, .5)";
              $color = "b8d9ae";
              $strokeColor = "rgba(184, 217, 174, 1)";
            }
            if(${'g'.$geos}=='New York City'){
              $fillColor = "rgba(255, 102, 0, .5)";
              $color = "ff6600";
              $strokeColor = "rgba(255, 102, 0, 1)";
            }

            // Get all necessary geographies
            $qb = $em->createQueryBuilder();
            $qb->select('d');
            $qb->from('CDCChartBundle:Data', 'd')
              ->where('d.question = :question AND d.geography = :geography AND d.year > :year')
              ->setParameter('question', $thisQuestion)
              ->setParameter('geography', ${'g'.$geos})
              ->setParameter('year', 1991);

            $data = $qb->getQuery()->getResult();
            $datapoints = '';
            ${'g'.$geos.'row'} = '<tr><td><span class="badge" style="margin-right: 5px; background-color: #'.$color.'">&nbsp;</span>'.${'g'.$geos}.'</td>';

            foreach($data AS $item){
                  if($item->getValue() < $min && $item->getValue() != 0.00){
                  $min = $item->getValue();
                  }
                  if($item->getValue() > $max){
                  $max = $item->getValue();
                  }
                  if($item->getYear() > '1999'){
                  $datapoints .= $item->getValue().","; 
                  }
                  ${'g'.$geos.'row'} .= '<td>'.$item->getValue().'</td>';
            }
       
            ${'g'.$geos.'row'} .= "</tr>";

            $dataset .= "{fillColor : '".$fillColor."', strokeColor : 'rgba(220,220,220,1)', data : [".$datapoints."]},";

            $geos--;

        }

        $dataset .= ']';
        // end dataset

        $max = $max + 3;
        $min = $min - 3;
        $step = round(($max-$min)/5);

        $USAcheck = "notchecked";
        $Chicagocheck = "notchecked";
        $Illinoischeck = "notchecked";
        $NYCcheck = "notchecked";

        if(in_array('USA', $checkboxes)){
          $USAcheck = "checked";
        }
        if(in_array('Chicago', $checkboxes)){        
          $Chicagocheck = "checked";
        }
        if(in_array('Illinois', $checkboxes)){
          $Illinoischeck = "checked";
        }
        if(in_array('New York City', $checkboxes)){
          $NYCcheck = "checked";
        }

        $form = $this->createFormBuilder()
            ->add('USA', 'checkbox', array('label' => 'USA', 'attr' => array('class' => $USAcheck)))
            ->add('Illinois', 'checkbox', array('label' => 'Illinois', 'attr' => array('class' => $Illinoischeck)))
            ->add('Chicago', 'checkbox', array('label' => 'Chicago', 'attr' => array('class' => $Chicagocheck)))
            ->add('New_York_City', 'checkbox', array('label' => 'NYC', 'attr' => array('class' => $NYCcheck)))
            ->getForm();

        if (!$thisQuestion) {
            throw $this->createNotFoundException('Unable to find Question entity.');
        }

        if ($form->isValid()) {
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.create.success');

            return $this->redirect($this->generateUrl('singlequestion', array('id' => $thisQuestion->getId())));
        }

        return $this->render('CDCChartBundle:Question:question.html.twig', array('question' => $thisQuestion, 'selections' => $selections, 'questions' => $questions, 'max' => $max, 'min' => $min, 'step' => $step, 'g1' => $g1, 'g1row' => $g1row, 'g2' => $g2, 'g2row' => $g2row, 'g3row' => $g3row, 'g4row' => $g4row, 'dataset' => $dataset, 'form' => $form->createView()));
    }

}

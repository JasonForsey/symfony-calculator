<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Calculator;
use AppBundle\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class CalculatorController extends Controller
{
    /**
     * @Route("/calculator", name="calculator")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function calculatorAction(Request $request)
    {
        $calculator = new Calculator();
        $form = $this->createForm(CalculatorType::class, $calculator);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calculator = $form->getData();

            $result = $calculator->performCalculation();

            return $this->render('calculator/calculator.html.twig', array(
                'form' => $form->createView(),
                'result' => $result
                )
            );
        }

        return $this->render('calculator/calculator.html.twig', array('form' => $form->createView()));
    }
}

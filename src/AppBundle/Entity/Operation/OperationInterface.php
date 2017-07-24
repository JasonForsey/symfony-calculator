<?php

namespace AppBundle\Entity\Operation;

interface OperationInterface
{
    public function runCalculation($firstNumber, $secondNumber);
}
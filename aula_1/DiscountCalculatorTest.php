<?php

class DiscountCalculatorTest
{
    // Teste 1 - Deve passar, pois o valor é maior que 100
    public function shouldApply_WhenValueIsAboveTheMinimumTest() {

        $discountCalculator = new DiscountCalculator();

        $totalValue = 130;
        $totalWithDiscount = $discountCalculator->apply($totalValue);

        $expectedValue = 110;
        $this->assertsEquals($expectedValue, $totalWithDiscount);
    }

    // Teste 2 - Não deve passar, pois o valor é menor que 100
    public function shouldNotApply_WhenValueIsAboveTheMinimumTest() {

        $discountCalculator = new DiscountCalculator();

        $totalValue = 90;
        $totalWithDiscount = $discountCalculator->apply($totalValue);

        $expectedValue = 90;
        $this->assertsEquals($expectedValue, $totalWithDiscount);
    }

    /**
     * @throws Exception
     */
    public function assertsEquals($expectedValue, $currentValue) {

        if($expectedValue != $currentValue) {
            $message = "Excepted: $expectedValue but got: $currentValue";
            throw new \Exception($message);
        }

        echo "Teste passou!<br>";
    }
}
<?php

class DiscountCalculatorTest
{
    public function shouldApply_WhenValueIsAboveTheMinimumTest() {

        $discountCalculator = new DiscountCalculator();

        $totalValue = 130;
        $totalWithDiscount = $discountCalculator->apply($totalValue);

        $expectedValue = 110;
        $this->assertsEquals($expectedValue, $totalWithDiscount);
    }

    public function assertsEquals($expectedValue, $currentValue) {

        if($expectedValue != $currentValue) {
            $message = "Excepted: $expectedValue but got: $currentValue";
            throw new \Exception($message);
        }

        echo "Teste passou! \n";
    }
}
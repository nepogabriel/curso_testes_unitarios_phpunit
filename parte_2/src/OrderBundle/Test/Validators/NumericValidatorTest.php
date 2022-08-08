<?php

namespace OrderBundle\Test\Validators;

use OrderBundle\Validators\NumericValidator;
use PHPUnit\Framework\TestCase;

class NumericValidatorTest extends TestCase
{
    /**
     * @dataProvider valueProvider
     */
    public function testIsNumeric($value, $expectedResult)
    {
        $numericValidator = new NumericValidator($value);

        $isValid = $numericValidator->isValid();

        $this->assertEquals($expectedResult, $isValid);
    }

    public function valueProvider()
    {
        return [
          'shouldBeValidWhenValueIsANumber'        => ['value' => 20, 'expectedResult' => true],
          'shouldBeValidWhenValueIsANumericString' => ['value' => '20', 'expectedResult' => true],
          'shouldBeValidWhenValueIsNotANumber'     => ['value' => 'abc', 'expectedResult' => false],
          'shouldBeValidWhenValueIsEmpty'          => ['value' => 'abc', 'expectedResult' => false]
        ];
    }



}
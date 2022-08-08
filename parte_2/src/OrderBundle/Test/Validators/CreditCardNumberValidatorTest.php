<?php

namespace OrderBundle\Test\Validators;

use OrderBundle\Validators\CreditCardNumberValidator;
use PHPUnit\Framework\TestCase;

class CreditCardNumberValidatorTest extends TestCase
{
    /**
     * @dataProvider valueProvider
     */
    public function testIsNumeric($value, $expectedResult)
    {
        $creditCardNumberValidator = new CreditCardNumberValidator($value);

        $isValid = $creditCardNumberValidator->isValid();

        $this->assertEquals($expectedResult, $isValid);
    }

    public function valueProvider()
    {
        return [
          'shouldBeValidWhenValueIsCreditCard' => ['value' => 5434442105002173, 'expectedResult' => true],
          'shouldBeValidWhenValueIsCreditCardAsString' => ['value' => '5434442105002173', 'expectedResult' => true],
          'shouldBeValidWhenValueIsNotCreditCard' => ['value' => 123456, 'expectedResult' => false],
          'shouldBeValidWhenValueIsNotCreditCardAsString' => ['value' => '123456', 'expectedResult' => false],
          'shouldBeValidWhenValueIsEmpty' => ['value' => '', 'expectedResult' => false],
        ];
    }



}
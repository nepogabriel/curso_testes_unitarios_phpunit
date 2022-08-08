<?php

namespace OrderBundle\Test\Validators;

use Exception;
use OrderBundle\Validators\CreditCardExpirationValidator;
use PHPUnit\Framework\TestCase;

class CreditCardExpirationValidatorTest extends TestCase
{
    /**
     * @dataProvider valueProvider
     * @throws Exception
     */
    public function testIsValid($value, $expectedResult)
    {
        $creditCardExpirationDate = new \DateTime($value);
        $creditCardExpirationValidator = new CreditCardExpirationValidator($creditCardExpirationDate);

        $isValid = $creditCardExpirationValidator->isValid();

        $this->assertEquals($expectedResult, $isValid);
    }

    public function valueProvider()
    {
        return [
          'shouldBeValidWhenValueIsNotExpired' => ['value' => '2040-01-01', 'expectedResult' => true],
          'shouldNotBeValidWhenValueIsExpired' => ['value' => '2005-01-01', 'expectedResult' => false]
        ];
    }



}
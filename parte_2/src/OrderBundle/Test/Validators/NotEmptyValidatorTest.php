<?php

namespace OrderBundle\Test\Validators;

use OrderBundle\Validators\NotEmptyValidator;
use PHPUnit\Framework\TestCase;

class NotEmptyValidatorTest extends TestCase {

    /**
     * @dataProvider valueProvider
     */
    public function testIsValid($value, $expectedResult) {
        $NotEmptyValidator = new NotEmptyValidator($value);

        $isValid = $NotEmptyValidator->isValid();

        $this->assertEquals($expectedResult, $isValid);
    }

    // 2 cenários nesta função
    public function valueProvider() {
        return [
            'shouldBeValidWhenValueIsNotEmpty' => ['value' => 'Aqui é a descrição!', 'expectedResult' => true],
            'shouldNotBeValidWhenValueIsEmpty' => ['value' => '', 'expectedResult' => false]
        ];
    }
}
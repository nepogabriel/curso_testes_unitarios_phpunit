<?php

namespace OrderBundle\Validators\Test;

use OrderBundle\Validators\NotEmptyValidator;
use PHPUnit\Framework\TestCase;

class NotEmptyValidatorTest extends TestCase {

    public function testIsValid() {
        // Nesse caso são 2 cenários
        $dataProvider = [
            // input => result,
            '' => false,
            'Aqui é a descrição!' => true
        ];

        // Irá passar pelos casos de testes
        foreach($dataProvider as $value => $expectedResult) {
            //$emptyValue = ''; Esse valor agora é o $value

            $NotEmptyValidator = new NotEmptyValidator($value);

            $isValid = $NotEmptyValidator->isValid();

            $this->assertEquals($expectedResult, $isValid);
        }
    }
}
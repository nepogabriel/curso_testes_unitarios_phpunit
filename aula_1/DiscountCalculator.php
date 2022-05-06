<?php

class DiscountCalculator
{
    const MINIMUM_VALUE = 100; // Se alterar o valor, os testes irão reprovar
    const DISCOUNT_VALUE = 20;

    // Função que está sendo testada
    public function apply($value) {
        if ($value > self::MINIMUM_VALUE)
            $value -= self::DISCOUNT_VALUE;

        return $value;
    }
}
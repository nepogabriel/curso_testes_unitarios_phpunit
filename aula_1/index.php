<?php

include 'autoload.php';

$discountCalculator = new DiscountCalculator();
echo $discountCalculator->apply(350) . "\n";
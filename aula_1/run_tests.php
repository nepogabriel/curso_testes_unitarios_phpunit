<?php

include 'autoload.php';

//$discountCalculatorTest = new DiscountCalculatorTest();
//$discountCalculatorTest->shouldApply_WhenValueIsAboveTheMinimum();

foreach(new DirectoryIterator(__DIR__) as $file ) {

    if(substr($file->getFilename(), -8) != 'Test.php' )
        continue;

    // Pegando o nome somente das classes de teste
    $className = substr($file->getFilename(), 0, -4);
    $testClass = new $className();

    // Pegando todos os metodos das classes
    $methods = get_class_methods($testClass);
    foreach($methods as $method) {

        if(substr($method, -4) != 'Test')
            continue;



        $testClass->$method();
    }
}
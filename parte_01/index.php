<?php

include_once './ChangeString.php';
include_once './CompleteRange.php';
include_once './ClearPar.php';
//include './CompleteRange.php';

echo "<h1>Eder Marquina</h1>";
echo "<h2>PARTE 01 : Resolver los siguientes casos usando íntegramente PHP</h2>";
echo "<hr>";


$clearParentesis = new ClearPar();
echo "<h3>Problema 03</h3>";
echo $clearParentesis->build('()())()');
echo $clearParentesis->build('((()');
echo $clearParentesis->build('( ​()()()()(()))))())((() ​)');


$completeRange = new CompleteRange();
echo "<h3>Problema 02</h3>";
echo $completeRange->build('1, 2, 4, 5');
echo $completeRange->build('2, 4, 9');
echo $completeRange->build('55, 58, 60');


$changeString = new ChangeString();
echo "<h3>Problema 01</h3>";
echo $changeString->build('**Casa 52Z');
echo $changeString->build('123 Abcd*3');

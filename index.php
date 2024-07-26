<?php
/**
 * @since 2024-07-26 20:30
 */

use Rulon\TestComposerPackage\MyClass;

require_once __DIR__ . '/vendor/autoload.php';

//relative namespace
$testObj1 = new Rulon\TestComposerPackage\MyClass;

//absolute namespace
$testObj2 = new \Rulon\TestComposerPackage\MyClass;

//short class name
$testObj2 = new MyClass;

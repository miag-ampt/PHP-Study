<?php

namespace Project\Module;

$namespace = "project\\Module\\"; //"の中では\はエスケープに解釈される
$class_name = 'SomeClass';
$class_name_with_ns = $namespace . $class_name;

$obj = new $class_name_with_ns //new Project\Module\SomeClass()

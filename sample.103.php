<?php

//インポートルール

namespace Project\Module;
use Project\Module2 as AnotherModule;

$obj = new AnotherModule\SomeClass(); //new Project\Module2\SomeClass()と等価

use Project\Module2;
//これは、use Project\Module2 ad Module2;と等価
//

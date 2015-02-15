<?php

set_error_hadler(function ($errno, $errstr, $errfile, $errline)
{
	throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

try {
	array_marge();
} catch (ErrorException $e) {
	echo 'Error Occured!', PHP_EOL;
	echo $e->getMessage(), PHP_EOL;
	echo 'Stack Trace:', PHP_EOL;
	echo $e->getTraceAsString();
}

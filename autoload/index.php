<?php

require_once 'src/Autoloader/NamespaceAutoloader.php';

$autoloader = new NamespaceAutoloader();
$autoloader->addNamespace('Model','src/Model');
$autoloader->register();

// autoload in action
use Model as Alias;
//
$say = new Alias\Test();
$say->say();


$res = new Alias\Result;
$res->comparsionArr('../file/file1.txt');

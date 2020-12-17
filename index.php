#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use BlankProject\Console\BlankProjectCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$command = new BlankProjectCommand();
$application->add($command);

$application->run();

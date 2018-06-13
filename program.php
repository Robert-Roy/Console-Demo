#! php

<?php

use Robert\SayHelloCommand;
use Symfony\Component\Console\Application;

require "vendor/autoload.php";

$app = new Application("Console Demo");

$app->add(new SayHelloCommand);

$app->run();

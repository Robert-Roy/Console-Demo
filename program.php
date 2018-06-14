#! php

<?php

use Robert\SayHelloCommand;
use Robert\RenderCommand;
use Symfony\Component\Console\Application;

require "vendor/autoload.php";

$app = new Application("Console Demo");

$app->add(new SayHelloCommand);
$app->add(new RenderCommand);

$app->run();

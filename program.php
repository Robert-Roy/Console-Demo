#! php

<?php

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

require "vendor/autoload.php";

$app = new Application("Console Demo");

$app->register("sayHelloTo")
        ->setDescription("Offer greeting to given person.")
        ->addArgument('name', InputArgument::REQUIRED, "Your name.")
        ->setCode(function(InputInterface $input, OutputInterface $output) {
            $name = $input->getArgument('name');
            $message = 'Hello, ' . $name . ".";
            $output->writeln("<info>{$message}</info>");
        });

$app->run();

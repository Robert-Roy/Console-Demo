<?php

namespace Robert;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SayHelloCommand extends Command {

    public function configure() {
        $this->setName("sayHelloTo")
                ->setDescription("Offer greeting to given person.")
                ->addArgument('name', InputArgument::REQUIRED, "Your name.");
    }

    public function execute(InputInterface $input, OutputInterface $output) {
        $name = $input->getArgument('name');
        $message = 'Hello, ' . $name . ".";
        $output->writeln("<info>{$message}</info>");
    }

}

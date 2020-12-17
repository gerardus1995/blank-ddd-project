<?php

namespace BlankProject\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BlankProjectCommand extends Command
{
    protected static $defaultName = 'app:blank-project';

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        try{
            $output->writeln('Hi there, blank project here');
        } catch (\Throwable $e) {
            // any other error should be notified to our NPM system
        }
    }
}
<?php

namespace Tests\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class HelloCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('hello')
            ->setDescription('Say hello')
            ->addArgument(
                'gender',
                InputArgument::OPTIONAL,
                'Who do you want to greet?'
            )
            ->addOption('boy', null, InputOption::VALUE_NONE, 'Hello boy')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        #$name = $input->getArgument('name');
        $option = $input->getOption('boy');

        if($option=="boy") {
            $output->writeln('Hello boy');
        }
        else {
            $output->writeln('Hello World');

        }
    }

}

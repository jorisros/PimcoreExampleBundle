<?php

namespace youwe\ExampleBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class YouweCommandCommand
 * @package youwe\ExampleBundle\Command
 *
 * This class has been generated with `bin/console generate:command`
 */
class YouweCommandCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('youwe:command')
            ->setDescription('This is a example command to see what happen')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');

        if ($input->getOption('option')) {
            // ...
        }

        $output->writeln('Command result.');
    }

}

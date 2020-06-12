<?php
namespace App\Command;

use App\Classes\EmployeeClass;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class CanCommand extends Command
{
    /**
     * @var EmployeeClass
     */
    protected $employee;

    protected function configure()
    {
        $this->addArgument(
            'skill',
            InputArgument::REQUIRED,
            'writeCode, testCode, communicateWithManager, draw, setTasks'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->employee->hasSkill($input->getArgument('skill')));

        return 0;
    }
}

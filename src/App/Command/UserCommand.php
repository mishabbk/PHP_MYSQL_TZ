<?php
namespace App\Command;

use App\Classes\EmployeeClass;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class UserCommand extends Command
{
    /**
     * @var EmployeeClass
     */
    protected $employee;

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write($this->employee->getSkills());

        return 0;
    }
}

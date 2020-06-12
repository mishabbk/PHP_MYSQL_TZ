<?php
namespace App\Command;

use App\Classes\ManagerClass;

class CanManagerCommand extends CanCommand
{
    public function __construct()
    {
        $this->employee = new ManagerClass();

        parent::__construct();
    }

    protected function configure()
    {
        parent::configure();

        $this
            ->setName('can:manager')
            ->setDescription('Check manager skill.')
            ->setHelp('This command allows you to check manager skill...');
    }
}

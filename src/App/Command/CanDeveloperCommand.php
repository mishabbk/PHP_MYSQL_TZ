<?php
namespace App\Command;

use App\Classes\DeveloperClass;

class CanDeveloperCommand extends CanCommand
{
    public function __construct()
    {
        $this->employee = new DeveloperClass();

        parent::__construct();
    }

    protected function configure()
    {
        parent::configure();

        $this
            ->setName('can:developer')
            ->setDescription('Check developer skill.')
            ->setHelp('This command allows you to check developer skill...');
    }
}

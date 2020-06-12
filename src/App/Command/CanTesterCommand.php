<?php
namespace App\Command;

use App\Classes\TesterClass;

class CanTesterCommand extends CanCommand
{
    public function __construct()
    {
        $this->employee = new TesterClass();

        parent::__construct();
    }

    protected function configure()
    {
        parent::configure();

        $this
            ->setName('can:tester')
            ->setDescription('Check tester skill.')
            ->setHelp('This command allows you to check tester skill...');
    }
}

<?php
namespace App\Command;

use App\Classes\TesterClass;

class UserTesterCommand extends UserCommand
{
    public function __construct()
    {
        $this->employee = new TesterClass();

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('user:tester')
            ->setDescription('Get tester skills.')
            ->setHelp('This command allows you to get tester skills...');
    }
}

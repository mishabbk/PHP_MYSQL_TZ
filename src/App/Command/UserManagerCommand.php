<?php
namespace App\Command;

use App\Classes\ManagerClass;

class UserManagerCommand extends UserCommand
{
    public function __construct()
    {
        $this->employee = new ManagerClass();

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('user:manager')
            ->setDescription('Get manager skills.')
            ->setHelp('This command allows you to get manager skills...');
    }
}

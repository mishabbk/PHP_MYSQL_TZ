<?php
namespace App\Command;

use App\Classes\DeveloperClass;

class UserDeveloperCommand extends UserCommand
{
    public function __construct()
    {
        $this->employee = new DeveloperClass();

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('user:developer')
            ->setDescription('Get developer skills.')
            ->setHelp('This command allows you to get developer skills...');
    }
}

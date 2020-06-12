<?php
namespace App\Command;

use App\Classes\DesignerClass;

class UserDesignerCommand extends UserCommand
{
    public function __construct()
    {
        $this->employee = new DesignerClass();

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('user:designer')
            ->setDescription('Get designer skills.')
            ->setHelp('This command allows you to get designer skills...');
    }
}

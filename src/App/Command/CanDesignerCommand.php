<?php
namespace App\Command;

use App\Classes\DesignerClass;

class CanDesignerCommand extends CanCommand
{
    public function __construct()
    {
        $this->employee = new DesignerClass();

        parent::__construct();
    }

    protected function configure()
    {
        parent::configure();

        $this
            ->setName('can:designer')
            ->setDescription('Check designer skill.')
            ->setHelp('This command allows you to check designer skill...');
    }
}

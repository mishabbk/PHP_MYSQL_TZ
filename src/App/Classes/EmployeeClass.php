<?php
namespace App\Classes;

use App\Interfaces\DrawInterface;
use App\Interfaces\CodeTestInterface;
use App\Interfaces\SetTasksInterface;
use App\Interfaces\CodeWriteInterface;
use App\Interfaces\CommunicateWithManagerInterface;

abstract class EmployeeClass
{
    public function getSkills()
    {
        $types = '';
        if ($this->canWriteCode()) {
            $types .= "- code writing \n";
        }
        if ($this->canTestCode()) {
            $types .= "- code testing \n";
        }
        if ($this->canCommunicateWithManager()) {
            $types .= "- communication with manager \n";
        }
        if ($this->canDraw()) {
            $types .= "- draw \n";
        }
        if ($this->canSetTasks()) {
            $types .= "- set tasks \n";
        }

        return $types;
    }

    public function hasSkill($name)
    {
        switch ($name) {
            case 'writeCode':
                return ($this->canWriteCode()) ? 'true' : 'false';
            case 'testCode':
                return ($this->canTestCode()) ? 'true' : 'false';
            case 'communicateWithManager':
                return ($this->canCommunicateWithManager()) ? 'true' : 'false';
            case 'draw':
                return ($this->canDraw()) ? 'true' : 'false';
            case 'setTasks':
                return ($this->canSetTasks()) ? 'true' : 'false';
            default:
                return '<error>invalid skill name, list of possible (writeCode, testCode, communicateWithManager, draw, setTasks)</error>';
        }
    }

    protected function canWriteCode()
    {
        if ($this instanceof CodeWriteInterface) {
            return true;
        }

        return false;
    }

    protected function canTestCode()
    {
        if ($this instanceof CodeTestInterface) {
            return true;
        }

        return false;
    }

    protected function canCommunicateWithManager()
    {
        if ($this instanceof CommunicateWithManagerInterface) {
            return true;
        }

        return false;
    }

    protected function canDraw()
    {
        if ($this instanceof DrawInterface) {
            return true;
        }

        return false;
    }

    protected function canSetTasks()
    {
        if ($this instanceof SetTasksInterface) {
            return true;
        }

        return false;
    }
}

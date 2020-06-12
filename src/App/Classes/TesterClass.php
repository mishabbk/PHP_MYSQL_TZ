<?php
namespace App\Classes;

use App\Interfaces\CodeTestInterface;
use App\Interfaces\SetTasksInterface;
use App\Interfaces\CommunicateWithManagerInterface;

class TesterClass extends EmployeeClass implements
    CodeTestInterface,
    CommunicateWithManagerInterface,
    SetTasksInterface
{}

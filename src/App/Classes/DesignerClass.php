<?php
namespace App\Classes;

use App\Interfaces\DrawInterface;
use App\Interfaces\CommunicateWithManagerInterface;

class DesignerClass extends EmployeeClass implements
    DrawInterface,
    CommunicateWithManagerInterface
{}

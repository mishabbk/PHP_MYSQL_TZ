<?php
namespace App\Classes;

use App\Interfaces\CodeTestInterface;
use App\Interfaces\CodeWriteInterface;
use App\Interfaces\CommunicateWithManagerInterface;

class DeveloperClass extends EmployeeClass implements
    CodeWriteInterface,
    CodeTestInterface,
    CommunicateWithManagerInterface
{}

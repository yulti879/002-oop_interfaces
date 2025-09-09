<?php
declare(strict_types=1);

namespace App\Classes;

use App\Interfaces\LeadInterface;

class Manager extends Employee implements LeadInterface {
    protected string $department;
    protected int $teamSize;
    protected int $projects;

    public function __construct(string $firstName, string $lastName, float $salary, string $department, int $teamSize, int $projects) {
        parent::__construct($firstName, $lastName, $salary);
        $this->department = $department;
        $this->teamSize = $teamSize;
        $this->projects = $projects;
    }

    public function leadTeam(): string {
        return "руководит командой из {$this->teamSize} человек в отделе {$this->department}";
    }

    public function planProject(): string {
        return "планирует {$this->projects} проектов";
    }

    public function holdMeeting(): string {
        return "проводит совещания";
    }

    public function getInfo(): string {
        return "{$this->getFullName()}, позиция: менеджер, зарплата: {$this->salary} золотых монет, " . 
               "особенности работы: " . $this->leadTeam() . ", " . $this->planProject() . ", " . $this->holdMeeting() . ".";
    }
}
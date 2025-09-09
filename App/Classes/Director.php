<?php
declare(strict_types=1);

namespace App\Classes;

class Director extends Manager {
    protected string $companyVision;
    protected int $branches;

    public function __construct(string $firstName, string $lastName, float $salary, string $department, int $teamSize, int $projects, string $companyVision, int $branches) {
        parent::__construct($firstName, $lastName, $salary, $department, $teamSize, $projects);
        $this->companyVision = $companyVision;
        $this->branches = $branches;
    }

    public function defineStrategy(): string {
        return "разрабатывает стратегию: {$this->companyVision}";
    }

    public function overseeBranches(): string {
        return "контролирует {$this->branches} филиалов";
    }

    public function getInfo(): string {
        return "{$this->getFullName()}, позиция: директор, зарплата: {$this->salary} золотых монет, " . 
               "особенности работы: " . $this->leadTeam() . ", " . $this->defineStrategy() . ", " . $this->overseeBranches() . ".";
    }
}
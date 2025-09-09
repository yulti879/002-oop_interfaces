<?php
declare(strict_types=1);

namespace App\Classes;

use App\Interfaces\WebinarSpeakerInterface;

class Tester extends Employee implements WebinarSpeakerInterface {
    protected string $testingType;
    protected int $bugsFound;
    protected string $tool;

    public function __construct(string $firstName, string $lastName, float $salary, string $testingType, int $bugsFound, string $tool) {
        parent::__construct($firstName, $lastName, $salary);
        $this->testingType = $testingType;
        $this->bugsFound = $bugsFound;
        $this->tool = $tool;
    }

    public function testApplication(): string {
        return "тестирует приложение методом {$this->testingType}";
    }

    public function reportBugs(): string {
        return "за этот месяц нашла {$this->bugsFound} багов";
    }

    public function conductWebinar(): string {
        return "проводит вебинары на темы тестирования и процессов";
    }

    public function getInfo(): string {
        return "{$this->getFullName()}, позиция: тестировщик, зарплата: {$this->salary} золотых монет, " . 
               "может тестировать: " . $this->testApplication() . ", " . $this->reportBugs() . 
               ", " . $this->conductWebinar() . ".";
    }
}
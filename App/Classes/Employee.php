<?php
declare(strict_types=1);

namespace App\Classes;

abstract class Employee {
    protected string $firstName;
    protected string $lastName;
    protected float $salary;

    public static int $count = 0;
    public static float $totalSalary = 0;

    public function __construct(string $firstName, string $lastName, float $salary) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;

        self::$count++;
        self::$totalSalary += $salary;
    }

    public function getFullName(): string {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    abstract public function getInfo(): string;
}
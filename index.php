<?php
declare(strict_types=1);

require_once __DIR__ . '/autoload.php';

use App\Classes\Employee;
use App\Classes\Manager;
use App\Classes\Director;
use App\Classes\Programmer;
use App\Classes\Tester;

$employees = [
    new Manager("Петров", "Петр", 25, "маркетинг", teamSize: 5, projects: 3),
    new Director("Сидоров", "Сидор", 50, "управление", teamSize: 10, projects: 5, companyVision: "рост компании на 20%", branches: 3),
    new Programmer("Иванов", "Иван", 20, "PHP", experience: 3, currentProject: "веб-сайт"),
    new Tester("Кузнецова", "Анна", 18, "функциональное тестирование", bugsFound: 15, tool: "Selenium")
];

foreach ($employees as $emp) {
    echo $emp->getInfo() . PHP_EOL;
}

echo PHP_EOL . "Общее количество сотрудников: " . Employee::$count . "." . PHP_EOL;
echo "Общая сумма зарплат: " . Employee::$totalSalary . " золотых монет." . PHP_EOL;
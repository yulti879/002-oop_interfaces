<?php
declare(strict_types=1);

require_once __DIR__ . '/autoload.php';

use App\Classes\Employee;
use App\Classes\Manager;
use App\Classes\Director;
use App\Classes\Programmer;
use App\Classes\Tester;

$employees = [
    new Manager("Петров", "Петр", 25, "маркетинг", 5, 3),
    new Director("Сидоров", "Сидор", 50, "управление", 10, 5, "рост компании на 20%", 3),
    new Programmer("Иванов", "Иван", 20, "PHP", 3, "веб-сайт"),
    new Tester("Кузнецова", "Анна", 18, "функциональное тестирование", 15, "Selenium")
];

foreach ($employees as $emp) {
    echo $emp->getInfo() . PHP_EOL;
}

echo PHP_EOL . "Общее количество сотрудников: " . Employee::$count . "." . PHP_EOL;
echo "Общая сумма зарплат: " . Employee::$totalSalary . " золотых монет." . PHP_EOL;
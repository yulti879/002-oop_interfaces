<?php
declare(strict_types=1);

namespace App\Classes;

use App\Interfaces\ApplicationCreatorInterface;
use App\Interfaces\WebinarSpeakerInterface;

class Programmer extends Employee implements ApplicationCreatorInterface, WebinarSpeakerInterface {
    protected string $language;
    protected int $experience;
    protected string $currentProject;

    public function __construct(string $firstName, string $lastName, float $salary, string $language, int $experience, string $currentProject) {
        parent::__construct($firstName, $lastName, $salary);
        $this->language = $language;
        $this->experience = $experience;
        $this->currentProject = $currentProject;
    }

    public function developApplication(): string {
        return "пишет код на {$this->language} для проекта {$this->currentProject}";
    }

    public function debugCode(): string {
        return "исправляет ошибки в коде";
    }

    public function conductWebinar(): string {
        return "проводит вебинары на технические темы";
    }

    public function getInfo(): string {
        return "{$this->getFullName()}, позиция: программист, зарплата: {$this->salary} золотых монет, " . 
               "может заниматься разработкой приложения: " . $this->developApplication() . ", " . $this->debugCode() . 
               ", " . $this->conductWebinar() . ".";
    }
}
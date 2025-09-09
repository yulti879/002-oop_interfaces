<?php
declare(strict_types=1);

namespace App\Interfaces;

interface ApplicationCreatorInterface {
    public function developApplication(): string;
}
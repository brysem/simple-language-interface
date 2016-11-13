<?php

namespace App\Interfaces;

interface LanguageInterface
{
    public function hello();

    public function bye();

    public function name($name);

    public function age($age);
}

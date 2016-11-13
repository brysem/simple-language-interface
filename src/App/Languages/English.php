<?php

namespace App\Languages;

use App\Interfaces\LanguageInterface;

class English implements LanguageInterface
{
    public function hello()
    {
        return 'Hello.';
    }

    public function bye()
    {
        return 'Bye.';
    }

    public function name($name)
    {
        return sprintf('My name is %s.', $name);
    }

    public function age($age)
    {
        return sprintf('I am currently %d years old.', $age);
    }
}

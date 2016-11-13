<?php

namespace App\Languages;

use App\Interfaces\LanguageInterface;

class Dutch implements LanguageInterface
{
    public function hello()
    {
        return 'Hallo.';
    }

    public function bye()
    {
        return 'Doeg.';
    }

    public function name($name)
    {
        return sprintf('Mijn naam is %s.', $name);
    }

    public function age($age)
    {
        return sprintf('Ik ben nu %d jaar oud.', $age);
    }
}

<?php

namespace App\Languages;

use App\Interfaces\LanguageInterface;

class Chinese implements LanguageInterface
{
    public function hello()
    {
        return '你好。';
    }

    public function bye()
    {
        return '再见。';
    }

    public function name($name)
    {
        return sprintf('我叫%s。', $name);
    }

    public function age($age)
    {
        return sprintf('现在，我%d岁。', $age);
    }
}

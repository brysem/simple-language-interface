<?php

namespace App\Languages;

use App\Interfaces\LanguageInterface;

class Japanese implements LanguageInterface
{
    public function hello()
    {
        return 'こんにちは。';
    }

    public function bye()
    {
        return 'さよなら。';
    }

    public function name($name)
    {
        return sprintf('私の名前は%sです。', $name);
    }

    public function age($age)
    {
        return sprintf('現在、 %d才です。', $age);
    }
}

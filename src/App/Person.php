<?php

namespace App;

use App\Interfaces\LanguageInterface;

class Person
{
    protected $name;

    protected $language;

    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function speaks(LanguageInterface $language)
    {
        $this->language = $language;
    }

    public function sayHello()
    {
        $this->hasLanguage();
        return $this->language->hello();
    }


    public function sayBye()
    {
        $this->hasLanguage();
        return $this->language->bye();
    }

    public function giveIntroduction()
    {
        $this->hasLanguage();

        return
            $this->language->hello() . PHP_EOL .
            $this->language->name($this->name) . PHP_EOL .
            $this->language->age($this->age) . PHP_EOL .
            $this->language->bye()
        ;
    }

    /**
     * Throws an exception if the person has not been assigned a language.
     */
    private function hasLanguage()
    {
        if(!$this->language instanceof LanguageInterface) {
            throw new \ErrorException('This person has not been assigned a language.');
        }

        return true;
    }
}

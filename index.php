<?php

require 'vendor/autoload.php';

use App\Person;
use App\Languages\Dutch;
use App\Languages\Chinese;
use App\Languages\English;
use App\Languages\Japanese;

$bryse = new Person('Bryse', 25);

foreach ([English::class, Dutch::class, Japanese::class, Chinese::class] as $language) {
    echo '<p>';
        $bryse->speaks(new $language);
        echo str_replace(PHP_EOL, '<br>', $bryse->giveIntroduction());
    echo '</p>';
}

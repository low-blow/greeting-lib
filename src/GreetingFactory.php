<?php

declare(strict_types=1);

namespace LowBlow\GreetingLib;

class GreetingFactory
{
    const DICTIONARY = [
        'Greetings, %s!',
        'Hey there, %s!',
        'Hi, %s!',
        'Hugs and greetings, %s!',
        'Wishing you joy, %s!',
        "Hey, %s! How's it going?",
        "Hello, dear %s!",
        "Hi there, %s!",
        "Bonjour, %s!",
        "Salutations, %s, my friend!",
    ];

    /**
     * @param string $name
     * @return string
     */
    public function generate(string $name): string
    {
        return sprintf(self::DICTIONARY[rand(0, count(self::DICTIONARY) - 1)], $name);
    }
}
# Welcome Message Generator

PHP library for generating welcome messages.

## Installation

Use the composer to install greeting-lib.

```shell
composer require low-blow/greeting-lib
```

## Usage

```php
use LowBlow\GreetingLib\GreetingFactory;

$factory = new GreetingFactory();

$greeting = $factory->generate('Sergey');
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

# Nova World Clock Card
A Laravel Nova card to display World Clocks

## Installation:

You can install the package in to a Laravel app that uses Nova via composer:

```bash
composer require amidesfahani/nova-world-clock
```

## Usage:
Add the below to app/Providers/NovaServiceProvder.php

```php
namespace App\Providers;

[...]

use AmidEsfahani\WorldClock\WorldClock;

class NovaServiceProvider extends NovaApplicationServiceProvider
{

[...]

  public function card()
  {
      return [
         (new WorldClock())
            ->timezones([
                'Asia/Tehran',
                'America/new_york',
                'America/los_angeles',
            ])
            ->timeFormat('h:i') //Optional time format default is: 'h:i:s'
            ->updatePeriod(1000) //Optional to set updating time period in millisecond default is 1000 ms = 1 second
      ];
  }

[...]

}

```

<img src="https://raw.githubusercontent.com/naifalshaye/worldclock/master/screenshots/screenshot.png" width="350">

## License:
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

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

use AmidEsfahani\NovaWorldClock\NovaWorldClock;

class NovaServiceProvider extends NovaApplicationServiceProvider
{

[...]

  public function card()
  {
      return [
         (new NovaWorldClock())
            ->timezones([
                'Asia/Tehran',
                'America/new_york',
                'America/los_angeles',
            ])
            ->timeFormat('h:i') //Optional time format default is: 'h:i:s'
            ->updatePeriod(1000) //Optional to set updating time period in millisecond default is 1000 ms = 1 second
            ->title(__('World Clock'))
            ->showTitle(true)
      ];
  }

[...]

}

```

<img src="https://raw.githubusercontent.com/amidesfahani/nova-world-clock/main/screenshots/screenshot.png" width="431">

## License:
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

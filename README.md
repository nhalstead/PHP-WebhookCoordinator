# WebhookCoordinator

Using the Basic Package you can Post Requests to Slack (Coming soon), Discord and other Services that have WebHook Endpoints with Ease!

This is a package for PHP, So it is PSR4 compliant and can be used with or without composer.

**Zero** Dependencies with exception of `CURL`.

The System is even ready for you to add you own Custom Webhook Endpoints.


### How to use:
> Load the Package using Composer
>```php
>require_once("../vendor/autoload.php"); // Composer Method, Loading by PSR4
>use nhalstead\WebhookCoordinator;
>```

>Load the Package **not** using Composer (Downloaded from GitHub)
>```php
>require_once("../src/WebhookCoordinator_load.php"); // Manual Load, no PSR4 Autoload
>use nhalstead\WebhookCoordinator;
>```


> This will send an Payload to a Specific channel on the specified event.
>```php
>use nhalstead\WebhookCoordinator;
>use nhalstead\Endpoints\DiscordWebhook;
>
> // Create new Queue
>$queue = new WebhookCoordinator();
>
>// Make new Event
>$newEvent = new DiscordWebhook("[DISCORD WEBHOOK URL]");
>$newEvent->username("John");
>$newEvent->avatar("https://png.icons8.com/clouds/50/000000/megaphone.png");
>$newEvent->message("Hello");
>
>
>// Add and Send Events in Queue
>$queue->addEvent($newEvent);
>$queue->sendEvents();
>```
> For more Examples check out the /examples folder.


# Contributors
- nhalstead @ https://github.com/nhalstead
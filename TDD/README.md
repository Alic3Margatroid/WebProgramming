## Test using PHP 7 and PHPUnit
1. Install PHP 7, follow the accept answer in the link: https://askubuntu.com/questions/705880/how-to-install-php-7
2. Install PHPUnit: https://phpunit.de/getting-started.html
3. Test Execution format:

```
➜ phpunit --bootstrap src/Email.php --testdox tests/EmailTest.php

Expected results:

PHPUnit 6.4.0 by Sebastian Bergmann and contributors.

Email
 [x] Can be created from valid email address
 [x] Cannot be created from invalid email address
 [x] Can be used as string
 ```

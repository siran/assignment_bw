# Assignment

## How to run

The script was tested and ran in

    $ php -v
    PHP 7.1.8-2+ubuntu16.04.1+deb.sury.org+4 (cli) (built: Aug  4 2017 13:04:12)

But it should also run in Windows and with lower versions of PHP (5.6+).
The major concern is the version of PHPUnit to run the tests.


To run, execute

    $ $ php balance.php "<string to test>"

For example the following script returns 2

    $ php balance.php "{}}"
    2

If no string is given to the script, the script displays an error message with instructions.


## How to test

The script can be tested using PHPUnit. A PHPUnit phar file is included in the repo for convenience.

To run the tests simply do:

    $ ./phpunit.phar tests.php

Should output:

    PHPUnit 6.4.3 by Sebastian Bergmann and contributors.

    ......                                                              6 / 6 (100%)

    Time: 187 ms, Memory: 10.00MB

    OK (6 tests, 6 assertions)


Any concerns, questions or suggestion please email me at `anmichel.rodriguez@gmail.com`

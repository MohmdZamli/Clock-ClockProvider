# Test Package => Clock-ClockProvider
This is Test Package To get Date and clock

#installation
Run this command in your composer
'composer require Clock-ClockProvider:dev-master'

#after compleated download package
-open your app.php file from this path 'config/app.php'

-put this provider's array line
'''php
Clock\ClockProvider\ClockProvider::class
'''

-put this aliases's array line
'''php
'clock' => Clock\ClockProvider\ClockControllerFacdecs::class
'''

-now,please run this command line in yout terminal
'php artisan vendor:publish'

#usage
To use this package 
'''php
clock::clock();
'''



Developing process log...

1. install laravel framework
2. start lara container via "/vendor/bin/sail up"
3. check console throws, may occur something wrong with local ports for app or mysql
4. if app is running and connect to db successfully, then migrate via "/vendor/bin/sail artisan migrate"
5. for more comfortable routine job create alias via "alias sail='bash vendor/bin/sail'"


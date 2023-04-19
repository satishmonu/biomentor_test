<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Create table 
1. Table name- test

Column 
Id 
Subject 
Topic 
Questions
Pdf link
scheduled_on
created_at
Subject

Topic | Questions |Pdf link |scheduled_on

chemistry

Atom

1.Are two atoms of the same element identical?

2.Can water stay liquid below zero degrees Celsius?

3.Can you light a diamond on fire?

4.How bad of an alcoholic do you 5.have to be to have your brain affected?

6.How can glass be a liquid if it's so hard?

7.How do I know if something is an acid so I can avoid eating it?

Null

2023-04-05 06:00:00

2. Add 2 3 more rows like this 



3. Create API to update the pdf link before 15 min of schedule_on



How to create a pdf link

Use questions column data to create a pdf 

and after creating of the pdf, update the link of that file to the pdf link column


## Working Files 

/Applications/MAMP/htdocs/biomentor_test/app/Console/Kernel.php

/Applications/MAMP/htdocs/biomentor_test/app/Jobs/UpdateLinkTableJob.php

/Applications/MAMP/htdocs/biomentor_test/app/Models/Tests.php

/Applications/MAMP/htdocs/biomentor_test/resources/views/welcome.blade.php



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

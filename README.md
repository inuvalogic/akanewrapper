## Project Wrapper for Akane Framework v3

*Wrapper for Akane Framework v3 based website project*

[Akane Framework v3](http://akane.webhade.com)

Version: 0.0.1

Last Update: 2019-09-13

Author: [WebHade Creative](http://www.webhadecreative.com)
___

### Minimum Requirement

1. PHP 5.3.9 and up
2. MySQL / MariaDB
3. Composer

### Instalation

create database called `akane3` and running this command on your terminal/cmd based on your OS.

#### Linux

```sh
$ composer create-project --prefer-dist inuvalogic/akanewrapper yourproject
$ cd yourproject
$ php akane mig migrate
$ php akane mig seed:run
```

#### Windows

```sh
C:\xampp\htdocs> composer create-project --prefer-dist inuvalogic/akanewrapper yourproject
C:\xampp\htdocs> cd yourproject
C:\xampp\htdocs\yourproject> php akane mig migrate
C:\xampp\htdocs\yourproject> php akane mig seed:run
```

### Running (development)

#### Linux

```sh
$ php -S localhost:8080 -t public_html
```

#### Windows

```sh
C:\xampp\htdocs> php -S localhost:8080 -t public_html
```

### Documentation

For futher detailed documentation can be found here

[akane.webhade.com](http://akane.webhade.com)

___

## Contribute

Feel free to contribute to this project

visit our site here

[akane.webhade.com](http://akane.webhade.com)

### Change Log

v.0.0.1 Master Release (Oct 8, 2017)
- minimum wrapper for akane3
- sample database
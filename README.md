fuel-oilserver
==============

FuelPHP package that allows you to use the php 5.4 built in server with the framework via oil commands.



Installation
============

Clone a copy and put it in your fuel/packages directory.

Just clone it:

```git clone git@github.com:iturgeon/fuel-oilserver.git fuel/packages/oilserver```

Or Add as a submodule:

```git submodule add git@github.com:iturgeon/fuel-oilserver.git fuel/packages/oilserver```


### Add a oilserver to your Config

in app/config/config.php add oilserver to 'always_load' > 'packages' array

```php
'always_load'  => array(
	'packages'  => array(
		'orm',
		'auth',
		// Add it in
		'oilserver',
	),
```


Usage
======

### Run the server

```php oil server``` or ```php oil s```

Will run a built in php server, use the default rewrite routing, all on localhost:8000

### Options

```php oil server option=value ...```

#### Bind the server to an IP
host=0.0.0.0

#### Bind the server to a specific port
port=8080

#### Path to the public directory if not default
docroot="public/"

#### Override the built in server router
router="/path/to/a/router.php"

#### Override the default php executable to use
php="/dir/to/alternate/php"

## Snatch

PHP router.

### Usage

To use this router you just need to require `snatch.php` and create new instance of the `Snatch` class. Then you will get full access to Snatch functionality.

```php
require 'snatch.php';
$snatch = new Snatch;
$snatch->get('/', function () {
	echo 'Hello, Snatch!';
});
$snatch->run();
```

### Documentation

GET route

```php
$snatch->get('/', function() {
	echo 'Yay!';
});
```

POST route

```php
$snatch->post('/', function() {
	echo 'Yay!';
});
```

### License

Snatch is licensed under [MIT License](http://opensource.org/licenses/MIT).

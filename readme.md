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

Handle 404
```php
$snatch->missing(function() {
	echo '404 error :c';
});
```

Add custom wildcard
```php
// single
$snatch->wildcard('wldcrd', 'regex');

// multiple
$snatch->wildcard(['wldcrd1' => 'regex1', 'wldcrd2' => 'regex2']]);
```


### License

Snatch is licensed under [MIT License](http://opensource.org/licenses/MIT).

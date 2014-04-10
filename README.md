# EatSafe

## Dev Setup

Create a file named `.env.local.php` with this data, updated with your info:

```
<?php

return array(

	$_ENV['DB_HOST'] => 'localhost',
	$_ENV['DB_NAME'] => 'eatsafe',
	$_ENV['DB_USER'] => 'codeup',
	$_ENV['DB_PASS'] => 'password',

);
```
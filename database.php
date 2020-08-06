<?php

use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;

$capsule = new Capsule;


$capsule->addConnection([
	'driver' => DB_DRIVER,
	'host' => DB_HOST,
	'port' => DB_PORT,
	'database' => DB_NAME,
	'username' => DB_USER,
	'password' => DB_PASSWORD,
	'charset' => DB_CHARSET,
	'collation' => DB_COLLATION,
	'prefix' => DB_PREFIX,
]);


// Set the event dispatcher used by Eloquent models... (optional)
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

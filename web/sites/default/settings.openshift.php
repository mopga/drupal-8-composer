<?php
$databases['default']['default'] = array (
   'database' => getenv('PG_DATABASE'),
   'username' => getenv('PG_USER'),
   'password' => getenv('PG_PASSWORD'),
   'host' => getenv('PG_HOST'),
   'port' => getenv('PG_PORT'),
   'namespace' => 'Drupal\\Core\\Database\\Driver\\pgsql',
   'driver' => 'pgsql',
   'prefix' => '',
);
$settings['hash_salt'] = json_encode($databases);

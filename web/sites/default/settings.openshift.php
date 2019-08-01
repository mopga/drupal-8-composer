<?php
$databases['default']['default'] = array (
   'database' => getenv('POSTGRES_DB'),
   'username' => getenv('POSTGRES_USER'),
   'password' => getenv('POSTGRES_PASSWORD'),
   'host' => getenv('PG_HOST'),
   'port' => getenv('PG_PORT'),
   'namespace' => 'Drupal\\Core\\Database\\Driver\\pgsql',
   'driver' => 'pgsql',
   'prefix' => '',
);
$settings['hash_salt'] = json_encode($databases);

<?php

/**
 * Database configuration options.
 *
 * Changes to these config files are not supported by BookStack and may break upon updates.
 * Configuration should be altered via the `.env` file or environment variables.
 * Do not edit this file unless you're happy to maintain any changes yourself.
 */

// REDIS - Split out configuration into an array
if (env('REDIS_SERVERS', false)) {
    $redisServerKeys = ['host', 'port', 'database'];
    $redisServers = explode(',', trim(env('REDIS_SERVERS', '127.0.0.1:6379:0'), ','));
    $redisConfig = [
        'cluster' => env('REDIS_CLUSTER', false)
    ];
    foreach ($redisServers as $index => $redisServer) {
        $redisServerName = ($index === 0) ? 'default' : 'redis-server-' . $index;
        $redisServerDetails = explode(':', $redisServer);
        if (count($redisServerDetails) < 2) $redisServerDetails[] = '6379';
        if (count($redisServerDetails) < 3) $redisServerDetails[] = '0';
        $redisConfig[$redisServerName] = array_combine($redisServerKeys, $redisServerDetails);
    }
}

// MYSQL - Split out port from host if set
$mysql_host = env('DB_HOST', 'localhost');
$mysql_host_exploded = explode(':', $mysql_host);
$mysql_port = env('DB_PORT', 3306);
if (count($mysql_host_exploded) > 1) {
    $mysql_host = $mysql_host_exploded[0];
    $mysql_port = intval($mysql_host_exploded[1]);
}

return [

    // Default database connection name.
    // Options: mysql, mysql_testing
    'default' => env('DB_CONNECTION', 'mysql'),

    // Available database connections
    // Many of those shown here are unsupported by BookStack.
    'connections' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => storage_path('database.sqlite'),
            'prefix'   => '',
        ],

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => $mysql_host,
            'database'  => env('DB_DATABASE', 'forge'),
            'username'  => env('DB_USERNAME', 'forge'),
            'password'  => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'port'      => $mysql_port,
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
            'engine' => null,
        ],

        'mysql_testing' => [
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'database'  => 'bookstack-test',
            'username'  => env('MYSQL_USER', 'bookstack-test'),
            'password'  => env('MYSQL_PASSWORD', 'bookstack-test'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => env('DB_HOST', 'localhost'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => env('DB_HOST', 'localhost'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset'  => 'utf8',
            'prefix'   => '',
        ],

    ],

    // Migration Repository Table
    // This table keeps track of all the migrations that have already run for
    // your application. Using this information, we can determine which of
    // the migrations on disk haven't actually been run in the database.
    'migrations' => 'migrations',

    // Redis configuration to use if set
    'redis' => env('REDIS_SERVERS', false) ? $redisConfig : [],

];

<?php

/**
 * @file
 * CircleCI generic database connection details.
 *
 * Values could be placed in the environment variables, but these are
 * general-knowledge credentials.
 */

$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => 'circle_test',
  'username' => 'root',
  'password' => 'ubuntu',
  'host' => '127.0.0.1',
  'port' => 3306,
  'prefix' => '',
);

$settings['theme_debug'] = TRUE;
$settings['hash_salt'] = 'flaosk@9i9#!~askdo';
$settings['container_yamls'][] = 'development.services.yml';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
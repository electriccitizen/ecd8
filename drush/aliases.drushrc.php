<?php
$aliases['ecd8.dev-old'] = array(
  'remote-host' => '192.241.140.130',
  'remote-user' => 'worm',
  'root' => '/home/master/applications/rbzsucbakn/public_html/web',
  'uri' => 'phpstack-156516-451575.cloudwaysapps.com',
  'ssh-options' => '-o "SendEnv PHP_IDE_CONFIG PHP_OPTIONS XDEBUG_CONFIG" -o  PasswordAuthentication=no -i "~/.ssh/id_rsa"',

);

$aliases['ecd8.dev'] = array(
  'uri' => 'phpstack-156516-451575.cloudwaysapps.com',
  'db-allows-remote' => TRUE,
  'remote-host' => '192.241.140.130',
  'remote-user' => 'worm',
  'root' => '/home/master/applications/rbzsucbakn/public_html/web',
  'ssh-options' => '-o "SendEnv PHP_IDE_CONFIG PHP_OPTIONS XDEBUG_CONFIG" -o  PasswordAuthentication=no -i "~/.ssh/worm_id_rsa"',

);


$aliases['ecd8.local'] = array(
  'uri' => 'ecd8.local',
  'root' => '/var/www/drupalvm/web',
  'remote-host' => 'ecd8.local',
  'remote-user' => 'vagrant',
  'ssh-options' => '-o "SendEnv PHP_IDE_CONFIG PHP_OPTIONS XDEBUG_CONFIG" -o PasswordAuthentication=no -i "' . (getenv('VAGRANT_HOME') ?: drush_server_home() . '/.vagrant.d') . '/insecure_private_key"',
  'path-aliases' => array(
    '%drush-script' => '/var/www/drupalvm/vendor/drush/drush/drush',
  ),
);


$aliases["ecd8.circle"] = array (
  'root' => '/home/circleci/site_build/web',
  'uri' => 'http://default',
  'path-aliases' =>
    array (
      '%drush' => '/home/circleci/site_build/vendor/drush/drush',
      '%site' => 'sites/default/',
    ),
);


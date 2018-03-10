<?php
$aliases['ecd8.dev'] = array(
  'remote-host' => '192.241.140.130',
  'remote-user' => 'master_mvbsuzfhag',
  'root' => '/home/master/applications/rbzsucbakn/public_html/web',
  'uri' => 'phpstack-156516-451575.cloudwaysapps.com',
  'ssh-options' => '-o -vv "StrictHostKeyChecking=no" "SendEnv PHP_IDE_CONFIG PHP_OPTIONS XDEBUG_CONFIG" -o  PasswordAuthentication=no -i "/home/circleci/.ssh/id_rsa"',

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


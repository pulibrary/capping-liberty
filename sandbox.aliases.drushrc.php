<?php

$aliases['sandbox'] = array(
  'root' => '/var/www/apps/sandbox',
  'uri' => 'libwebdev.princeton.edu/sandbox',
  'path-aliases' => array(
    '%dump-dir' => '/var/www/backups/sandbox/',
    '%dump' => '/var/www/backups/sync/sandbox_sql_sync_dump.sql',
    '%sites' => '/var/www/apps/sandbox/sites/',
  ),
  'command-specific' => array (
    'sql-sync' => array (
      'simulate' => '0',
      'structure-tables' => array(
        'custom' => array('cache', 'cache_filter', 'cache_menu', 'cache_page', 'history', 'watchdog'),
      ),
    ),
    'rsync' => array (
      'simulate' => '0',
      'mode' => 'rlptDz',
    ),
  ),
);
?>

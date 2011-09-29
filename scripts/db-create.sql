create database 'drupal_sandbox';
use mysql;
CREATE USER 'drupal_sandbox'@'localhost' IDENTIFIED BY 'drp#san$ox';
GRANT ALL PRIVILEGES ON drupal_sandbox.* TO 'drupal_sandbox'@'localhost' WITH GRANT OPTION;
flush privileges;


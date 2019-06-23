<?php

  /*o nome do banco de dados*/
  define('DB_NAME', 'food_api');

  /*usuário do banco de dados mysql*/
  define('DB_USER', 'root');

  /*senha do banco de dados mysql*/
  define('DB_PASSWORD', '');

  /*nome do host do MySql,  endereço do servidor do banco de dados */
  define('DB_HOST', 'localhost');

  /*caminho absoluto para a pasta do sistema*/
  if ( !defined('ABSPATH') )
  	define('ABSPATH', dirname(__FILE__) . '/');

  /*caminho no server para o sistema */
  if ( !defined('BASEURL') )
	define('BASEURL', '/testapi/');

  /*caminho do arquivo de banco de dados*/
  if ( !defined('DBAPI') )
  	define('DBAPI', ABSPATH . 'inc/database.php')

?>

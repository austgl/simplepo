<?php

$simplepo_config = array();
$simplepo_config['db_user'] = "";
$simplepo_config['db_pass'] = "";
$simplepo_config['db_host'] = "";
$simplepo_config['db_name'] = "";
$simplepo_config['table_prefix'] = "";

$link = @mysql_connect( $simplepo_config['db_host'], $simplepo_config['db_user'], $simplepo_config['db_pass'] );
mysql_select_db( $simplepo_config['db_name'] );

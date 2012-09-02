<?php
	//include all DAO files
	require_once('sql/Connection.class.php');
	require_once('sql/ConnectionFactory.class.php');
	require_once('sql/ConnectionProperty.class.php');
	require_once('sql/QueryExecutor.class.php');
	require_once('sql/Transaction.class.php');
	require_once('sql/SqlQuery.class.php');
	require_once('core/ArrayList.class.php');
	require_once('dao/DAOFactory.class.php');
 	
	require_once('dao/BadgeDAO.class.php');
	require_once('dto/Badge.class.php');
	require_once('mysql/BadgeMySqlDAO.class.php');
	require_once('mysql/ext/BadgeMySqlExtDAO.class.php');

?>
<?php

/*** include the Model DAO's ***/
 include __SITE_PATH . '/model/' . 'include_dao.php';
 
 /*** include the controller class ***/
 include __SITE_PATH . '/application/' . 'controller_base.class.php';

 /*** include the registry class ***/
 include __SITE_PATH . '/application/' . 'registry.class.php';

 /*** include the router class ***/
 include __SITE_PATH . '/application/' . 'router.class.php';

 /*** include the template class ***/
 include __SITE_PATH . '/application/' . 'template.class.php';

 /*** a new registry object ***/
 $registry = new registry;

 /*** create the database registry object ***/
 // $registry->db = db::getInstance();
?>

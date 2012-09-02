<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return BadgeDAO
	 */
	public static function getBadgeDAO(){
		return new BadgeMySqlExtDAO();
	}


}
?>
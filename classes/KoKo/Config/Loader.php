<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * (Ko)hana (Ko)rotkin configuration (loader)
 *    
 * @author Yehuda Korotkin
 * 
 * @see kokoloader class
 * @link http://www.korotkin.co.il
 * @link https://github.com/Korotkin-Solutions/KoKo-Loader
 */
class KoKo_Config_Loader{
	public static function load($_FILE_)
	{
		$conf_path = dirname($_FILE_) 
					. DIRECTORY_SEPARATOR . Kohana::$config->load('kokoloader.subdir') 
					. DIRECTORY_SEPARATOR . strtoupper($_SERVER['KOHANA_ENV'])
					. DIRECTORY_SEPARATOR . basename($_FILE_);
		
		if(file_exists($conf_path))
			return require_once($conf_path);
		
		throw new Exception("Cannot find config " . $conf_path);
	}
}
<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Usage:
 * 
 *    In config file (/application/config/[what-ever].php)
 *
 *    Write at top:
 *         return kokoloader::load(__FILE__);
 * 
 *    Automatically it link to config file
 *    in path /application/config/[env folder]/[ENVIORMENT]
 *    
 *    The [env folder] is configured at config/kokoloader.php
 *    
 * @author Yehuda Korotkin
 * @link http://www.korotkin.co.il
 * @link https://github.com/Korotkin-Solutions/KoKo-Loader
 */
abstract class kokoloader extends KoKo_Config_Loader{}
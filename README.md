KoKo-Loader
===========

Install
-------
Load config files by environment in Kohana Framework 3+

    git submodule add https://github.com/Korotkin-Solutions/KoKo-Loader.git modules/KoKo-Loader
    git submodule init
    git submodule update

edit `"bootstrap.php"` and enable the "KoKo-Loader" Module

    Kohana::modules(array(
    		::
    	'KoKo-loader'   =>MODPATH.'KoKo-Loader',
    		::
    	));

create environment folders

    mkdir -p /application/config/env/{DEVELOPMENT,PRODUCTION}
    cp /application/config/*.php /application/config/env/{DEVELOPMENT,PRODUCTION}


Configure 
----------
edit your config file that you want to isolate environments (usally located at `/application/config/*.php`)
write there:

    <?php defined('SYSPATH') OR die('No direct access allowed.');
    return kokoloader::load(__FILE__);

thats all! :-)

Keep in touch
-------------
You visit us @ http://www.korotkin.co.il/


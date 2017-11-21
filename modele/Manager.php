<?php

namespace Mumu\Blog\Model;

class Manager
{
	protected function connexionBdd()
	{
	    $bdd = new \PDO('mysql:host='.\Config::$HOST.';dbname='.\Config::$DBNAME.';charset=utf8',  \Config::$USER, \Config::$PASSWORD);
	    return $bdd;	        
	}
}

<?php 

class Connection
{
	public static function make()
	{
		try {
		
			return new PDO('mysql:host=127.0.0.1;dbname=myself','root','');

		} catch (Exception $e) {
			die('Could not connect');
		}
	}
}


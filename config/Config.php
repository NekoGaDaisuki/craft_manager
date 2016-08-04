<?php

final class Config
{

	const SOURCE = '../config/config.ini';

	private static $data = null;

	public static function getConfig($section = null)
	{
		$data = self::getData ();
		if ($section === null || ! array_key_exists ( $section, $data ))
		{
			return $data;
		}
		return $data [$section];
	}

	public static function getData()
	{
		if (self::$data !== null)
		{
			return self::$data;
		}
		self::$data = parse_ini_file ( self::SOURCE, true );
		return self::$data;
	}

}

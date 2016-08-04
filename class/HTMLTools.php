<?php

final class HTMLTools
{

	const DEFAULT_LANG = 'fr';

	const HOME = 'Index.php?';

	public static function buildURL($page, array $args = array())
	{
		$args = array_merge ( array (
				'page' => $page 
		), $args );
		return self::HOME . http_build_query ( $args );
	}

	public static function capitalize($string)
	{
		return ucfirst ( mb_strtolower ( $string ) );
	}

	public static function createSimpleElement($type, $attr)
	{
		$str = '<' . $type;
		foreach ( $attr as $key => $value )
		{
			$str .= ' ' . $key . '="' . $value . '"';
		}
		$str .= ' />';
		return $str;
	}

	public static function createElement($type, $attr, $content = null)
	{
		$str = '<' . $type;
		foreach ( $attr as $key => $value )
		{
			$str .= ' ' . $key . '="' . $value . '"';
		}
		$str .= '>';
		if ($content !== null)
		{
			$str .= $content;
		}
		$str .= '</' . $type . '>';
		return $str;
	}

	public static function escape($string)
	{
		return htmlspecialchars ( $string, ENT_QUOTES );
	}

	public static function getLang()
	{
		$lang = filter_input ( INPUT_GET, 'lang' );
		if ($lang === null)
		{
			$lang = self::DEFAULT_LANG;
		}
		return $lang;
	}

	public static function getPostArg($name)
	{
		$arg = filter_input ( INPUT_POST, $name );
		if ($arg === null)
		{
			throw new BadRequestException ( 'Page parameter "' . $name . '" not found.' );
		}
		return $arg;
	}

	public static function getUrlArg($name)
	{
		$arg = filter_input ( INPUT_GET, $name );
		if ($arg === null)
		{
			throw new NotFoundException ( 'URL parameter "' . $name . '" not found.' );
		}
		return $arg;
	}

	public static function redirect($page, array $args = array())
	{
		header ( 'Location: ' . self::createLink ( $page, $args ) );
		die ();
	}

}

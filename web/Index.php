<?php

final class Index
{

	const CLASS_SECTION = 'class';

	const HOME_PAGE = 'home';

	const LAYOUT_DIR = '../layout/';

	public function init()
	{
		error_reporting ( E_ALL | E_STRICT );
		mb_internal_encoding ( 'UTF-8' );
		set_exception_handler ( array (
				$this,
				'handleException' 
		) );
		spl_autoload_register ( array (
				$this,
				'loadClass' 
		) );
		session_start ();
	}

	public function run()
	{
		$this->runPage ( $this->getPage () );
	}

	public function handleException(Exception $except)
	{
		if ($except instanceof NotFoundException)
		{
			header ( 'HTTP/1.0 404 Not Found' );
			$this->runPage ( '404' );
		} else
		{
			header ( 'HTTP/1.1 500 Internal Server Error' );
			$this->runPage ( '500' );
		}
	}

	public function loadClass($class)
	{
		require_once '../config/Config.php';
		$ressources = Config::getConfig ( self::CLASS_SECTION );
		if ($class !== 'Config' && ! array_key_exists ( $class, $ressources ))
		{
			die ( 'Class "' . $class . '" not found.' );
		}
		require_once $ressources [$class];
	}

	private function getPage()
	{
		$page = filter_input ( INPUT_GET, 'page' );
		if ($page === null)
		{
			$page = self::HOME_PAGE;
		}
		return $this->checkPage ( $page );
	}

	private function checkPage($page)
	{
		$lang = HTMLTools::getLang ();
		if (! preg_match ( '/^[a-z0-9-]+$/i', $page ))
		{
			throw new NotFoundException ( 'Unsafe page "' . $page . '" requested' );
		}
		if (! $this->hasScript ( $page, $lang ) && ! $this->hasTemplate ( $page, $lang ))
		{
			throw new NotFoundException ( 'Page "' . $page . '" not found' );
		}
		return $page;
	}

	private function runPage($page)
	{
		$lang = HTMLTools::getLang ();
		$run = false;
		$script = null;
		if ($this->hasScript ( $page, $lang ))
		{
			$run = true;
			$script = $this->getScript ( $page, $lang );
		}
		if ($this->hasTemplate ( $page, $lang ))
		{
			$run = true;
			$template = $this->getTemplate ( $page, $lang );
			require self::LAYOUT_DIR . 'index.phtml';
		}
		if (! $run)
		{
			die ( 'Page "' . $page . '" has neither script nor template!' );
		}
	}

	private function getScript($page, $lang)
	{
		return '../' . $lang . '/' . $page . '.php';
	}

	private function getTemplate($page, $lang)
	{
		return '../' . $lang . '/' . $page . '.phtml';
	}

	private function hasScript($page, $lang)
	{
		return file_exists ( $this->getScript ( $page, $lang ) );
	}

	private function hasTemplate($page, $lang)
	{
		return file_exists ( $this->getTemplate ( $page, $lang ) );
	}

}

class FactoryIndex
{

	public function __construct()
	{
		$index = new Index ();
		$index->init ();
		$index->run ();
	}

}

$content = new FactoryIndex ();

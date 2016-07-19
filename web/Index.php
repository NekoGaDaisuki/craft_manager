<?php
final class Index
{
    const DEFAULT_PAGE = 'home';
    const RESSOURCES_DIR = '../ressources/';
    const LAYOUT_DIR = '../layout/';

    public function init()
    {
        error_reporting(E_ALL | E_STRICT);
        mb_internal_encoding('UTF-8');
        set_exception_handler(array($this, 'handleException'));
        spl_autoload_register(array($this, 'loadClass'));
        session_start();
    }

    public function run()
    { $this->runPage($this->getPage()); }

    public function handleException(Exception $except)
    {
        if ($except instanceof  NotFoundException)
        {
            header('HTTP/1.0 404 Not Found');
            $this->runPage('404');
        } else
        {
            header('HTTP/1.1 500 Internal Server Error');
            $this->runPage('500');
        }
    }

    public function loadClass($label)
    {
        $ressources = array(
            'NotFoundException' => '../exception/NotFoundException.php',
        );
        if (!array_key_exists($label, $ressources))
        { die('Class "' . $label . '" not found.'); }
        require_once $ressources[$label];
    }

    private function getPage()
    {
        $label = self::DEFAULT_PAGE;
        if (array_key_exists('page', $_GET))
        { $label = $_GET['page']; }
        return $this->checkPage($label);
    }

    private function checkPage($label)
    {
        if (!preg_match('/^[a-z0-9-]+$/i', $label))
        { throw new NotFoundException('Unsafe page "' . $label . '" requested'); }
        if (!$this->hasScript($label) && !$this->hasTemplate($label))
        { throw new NotFoundException('Page "' . $label . '" not found'); }
        return $label;
    }

    private function runPage($label)
    {
        $run = false;
        if ($this->hasScript($label))
        {
            $run = true;
            require $this->getScript($label);
        }
        if ($this->hasTemplate($label))
        {
            $run = true;
            $template = $this->getTemplate($label);
            require self::LAYOUT_DIR . 'index.phtml';
        }
        if (!$run)
        { die('Page "' . $label . '" has neither script nor template!'); }
    }

    private function getScript($label)
    { return self::RESSOURCES_DIR . $label . '.php'; }

    private function getTemplate($label)
    { return self::RESSOURCES_DIR . $label . '.phtml'; }

    private function hasScript($label)
    { return file_exists($this->getScript($label)); }

    private function hasTemplate($label)
    { return file_exists($this->getTemplate($label)); }
}

$index = new Index();
$index->init();
$index->run();

